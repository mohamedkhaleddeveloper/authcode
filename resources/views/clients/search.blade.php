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
                            <h2>{{__('Client Search')}}</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}"> {{__('Back')}}</a>
                        </div>
                    </div>
                
                   
                    
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="card-text">
                            {{-- <p>Defult Text</p> --}}
                        </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Warning!</strong> Please check your input code<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('clients.search.submit') }}" method="GET">
                                   
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> {{__('Client Search')}}</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="projectinput3">{{__('mobile')}}</label>
                                                    <input type="mobile" id="projectinput3" class="form-control" placeholder="{{__('Mobile')}}" name="mobile">
                                                </div>
                                            </div>
                                        </div>
        
                                        </div>
                                    </div>
        
                                    <div class="form-actions float-right">
                                        <button type="submit" class="btn btn-blue">
                                            <i class="icon-magnifier"></i> {{__('Search')}} 
                                        </button>
                                    </div>
                                </form>
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

