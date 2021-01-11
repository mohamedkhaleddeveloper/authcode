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
                            <h2>{{__('Client Code Show')}}</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.codes', $client->id) }}"> Back</a>
                        </div>
                    </div>
                
                   
                    
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i>{{__('Client Code Info')}}</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">{{__('Code')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $code->code }}
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput2">{{__('Client')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $client->name_en }} -  {{ $client->name_en }}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput3">{{__('Product')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $product->name_ar }} - {{ $product->name_en }}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput4">{{__('from')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $code->from }}
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="projectinput4">{{__('to')}}</label>
                                            <br/>
                                            <strong>
                                                {{ $code->to }}
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

