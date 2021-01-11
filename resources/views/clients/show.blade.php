@extends('layouts.admin-app')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body"><!-- CRM stats -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="height: 1001.5px;">
                        <div class="card-header">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <h2>Create New Clients</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>
                
                   
                    
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i> {{__('Personal Info')}}</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">{{__('Arabic Name')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $client->name_ar }}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2">{{__('English Name')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $client->name_en }}
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput3">{{__('mobile')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $client->mobile }}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput4">{{__('code')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $client->code }}
                                            </strong>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection

