<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class AgentController extends Controller
{
    public function index()
    {
        return view('backend.agent.index');
    }

    public function create()
    {
        return view('backend.agent.create');
    }

    public function get_table_data()
    {
        $agents = Agent::select('id', 'photo', 'full_name', 'email', 'phone_number', 'address', 'documents');

        return Datatables::eloquent($agents)
            ->editColumn('photo', function ($agent) {
                $photo = $agent->photo
                    ? profile_picture($agent->photo)
                    : asset('public/backend/images/avatar.png');
                return '<div class="profile_picture text-center">'
                    . '<img src="' . $photo . '" class="thumb-sm img-thumbnail">'
                    . '</div>';
            })
            ->addColumn('documents', function ($agent) {
                if (!empty($agent->documents)) {
                    return '<div class="profile_picture text-center">'
                        . '<a href="' . asset('public/uploads/media/' . $agent->documents) . '" target="_blank" class="btn btn-primary btn-xs">View</a>'
                        . '</div>';
                }
                return '<span class="text-danger text-center">No Document Available</span>';
            })



            ->addColumn('action', function ($agent) {
                return '<div class="dropdown text-center">'
                    . '<button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">'
                    . _lang('Action') . '&nbsp;</button>'
                    . '<div class="dropdown-menu">'
//                    . '<a class="dropdown-item" href="' . route('agents.edit', $agent->id) . '"><i class="ti-pencil-alt"></i> '
//                    . _lang('Edit') . '</a>'
//                    . '<a class="dropdown-item" href="' . route('agents.show', $agent->id) . '"><i class="ti-eye"></i> '
//                    . _lang('View') . '</a>'
//                    . '<form action="' . route('agents.destroy', $agent->id) . '" method="post" style="display:inline;">'
//                    . csrf_field()
//                    . '<input name="_method" type="hidden" value="DELETE">'
//                    . '<button class="dropdown-item btn-remove" type="submit" onclick="return confirm(\'' . _lang('Are you sure?') . '\')">'
//                    . '<i class="ti-trash"></i> ' . _lang('Delete') . '</button>'
//                    . '</form>'
                    . '</div>'
                    . '</div>';
            })
            ->setRowId(function ($agent) {
                return "row_" . $agent->id;
            })
            ->rawColumns(['photo','action', 'documents'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:agents,email',
            'phone_number' => 'required',
            'address' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'document' => 'nullable|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
        ]);

        $photo = 'default.png';
        if ($request->hasfile('photo')) {
            $file  = $request->file('photo');
            $photo = time() . $file->getClientOriginalName();
            $file->move(public_path() . "/uploads/profile/", $photo);
        }

        $document = "";
        if ($request->hasfile('document')) {
            $file       = $request->file('document');
            $document = time() . $file->getClientOriginalName();
            $file->move(public_path() . "/uploads/media/", $document);
        }

        $agent = new Agent();
        $agent->full_name = $request->full_name;
        $agent->email = $request->email;
        $agent->phone_number = $request->phone_number;
        $agent->address = $request->address;
        $agent->photo = $photo;
        $agent->documents = $document;
        $agent->save();

        return redirect()->route('agents.index')->with('success', _lang('Agent created successfully'));
    }

}
