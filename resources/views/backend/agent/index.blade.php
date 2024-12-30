@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card no-export">
                <div class="card-header d-flex align-items-center">
                    <span class="panel-title">{{ _lang('Agent List') }}</span>

                    <div class="ml-auto">
                        <a class="btn btn-primary btn-xs" href="{{ route('agents.create') }}"><i class="ti-plus mr-1"></i>{{ _lang('Add New') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="agents_table" class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">{{ _lang('Photo') }}</th>
                            <th>{{ _lang('Full Name') }}</th>
                            <th>{{ _lang('Email') }}</th>
                            <th>{{ _lang('Phone Number') }}</th>
                            <th>{{ _lang('Address') }}</th>
                            <th>{{ _lang('Document') }}</th>
                            <th class="text-center">{{ _lang('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js-script')
    <script>
        (function ($) {
            "use strict";

            $('#agents_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('admin/agents/get_table_data') }}',
                "columns" : [
                    { data : 'photo', name : 'photo' },
                    { data : 'full_name', name : 'full_name' },
                    { data : 'email', name : 'email' },
                    { data : 'phone_number', name : 'phone_number' },
                    { data : 'address', name : 'address' },
                    { data : 'documents', name : 'documents' },
                    { data : "action", name : "action" },
                ],
                responsive: true,
                "bStateSave": true,
                "bAutoWidth": false,
                "ordering": false,
                "language": {
                    "decimal":        "",
                    "emptyTable":     "{{ _lang('No Data Found') }}",
                    "info":           "{{ _lang('Showing') }} _START_ {{ _lang('to') }} _END_ {{ _lang('of') }} _TOTAL_ {{ _lang('Entries') }}",
                    "infoEmpty":      "{{ _lang('Showing 0 To 0 Of 0 Entries') }}",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "{{ _lang('Show') }} _MENU_ {{ _lang('Entries') }}",
                    "loadingRecords": "{{ _lang('Loading...') }}",
                    "processing":     "{{ _lang('Processing...') }}",
                    "search":         "{{ _lang('Search') }}",
                    "zeroRecords":    "{{ _lang('No matching records found') }}",
                    "paginate": {
                        "first":      "{{ _lang('First') }}",
                        "last":       "{{ _lang('Last') }}",
                        "previous": "<i class='ti-angle-left'></i>",
                        "next" : "<i class='ti-angle-right'></i>",
                    }
                },
                drawCallback: function () {
                    $(".dataTables_paginate > .pagination").addClass("pagination-bordered");
                }
            });

        })(jQuery);
    </script>
@endsection
