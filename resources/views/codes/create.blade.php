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
                            <h2>{{__('Create new Code')}} {{$client->name_ar}}</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.codes',$client->id) }}">{{__('Back')}}</a>
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
                            <form action="{{ route('codes.store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> {{__('')}}</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput1">{{__('Products')}}</label>
                                                    <select class="form-control" name="product_id">
                                                        <option>{{__('Choose')}}</option>
                                                        @foreach ($products as $product)
                                                            <option value="{{$product->id}}">{{$product->name_ar}} - {{$product->name_en}}</option>
                                                        @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput2">{{__('From')}}</label>
                                                    <input type="hidden"  name="client_id" value="{{$client->id}}">
                                                    <input type="hidden"  name="code" value="254121">
                                                    <input type="date" id="projectinput2" class="form-control" placeholder="Last Name" name="from" >
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput3">{{__('To')}}</label>
                                                    <input type="date" id="projectinput3" class="form-control" placeholder="E-mail" name="to">
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
                                            <i class="fa fa-check-square-o"></i> {{__('Save')}}
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

