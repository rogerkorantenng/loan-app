@extends('layouts.app')

@section('content')
    <form method="post" class="validate" autocomplete="off" action="{{ route('agents.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="header-title">{{ _lang('Add New Agent') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Full Name') }}</label>
                                    <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Email ') }}</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Address') }}</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Phone Number') }}</label>
                                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('ID Card') }}</label>
                                    <input type="text" class="form-control" name="identity_card" value="{{ old('identity_card') }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Photo') }}</label>
                                    <input type="file" class="form-control dropify" name="photo" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Document') }}</label>
                                    <input type="file" class="form-control dropify" name="document" >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Submit') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


