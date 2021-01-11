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
                            <h2>{{__('Create new Product')}}</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{__('Back')}}</a>
                        </div>
                    </div>
                
                   
                    
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="card-text">
                            <p>Defult Text</p>
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
                            <form action="{{ route('products.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> {{__('Personal Info')}}</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1">{{__('Arabic Name')}}</label>
                                                    <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="name_ar" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput2">{{__('English Name')}}</label>
                                                    <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="name_en" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="projectinput3">{{__('Description')}}</label>
                                                    <textarea  class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>                                            
                                        </div>
        
                                        </div>
                                    </div>
        
                                    <div class="form-actions float-right">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> {{__('Cancel')}}
                                        </button>
                                        <button type="submit" class="btn btn-blue">
                                            <i class="fa fa-check-square-o"></i>  {{__('Save')}}
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

