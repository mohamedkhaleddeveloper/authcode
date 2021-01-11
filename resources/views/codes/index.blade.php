@extends('layouts.admin-app')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body"><!-- CRM stats -->
            <div class="row">
                <div class="card">
                    <div class="pull-right">
                        <a class="btn btn-blue float-right" href="{{ route('code.create',$client->id) }}">{{__('Create new Code')}}</a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
           
                    <table class="table table-bordered  table-responsive">
                        <tr>
                            <th>No</th>
                            <th>{{__('Product Name')}}</th>
                            <th>{{__('From')}}</th>
                            <th>{{__('To')}}</th>
                            <th width="250px">{{__('Action')}}</th>
                        </tr>
                        @foreach ($codes as $code)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                @foreach ($products as $product)
                                    @if($code->product_id ==  $product->id)
                                     {{ $product->name_ar}} - {{ $product->name_en}}
                                    @endif
                                @endforeach
                                
                            </td>
                            <td>{{ $code->from }}</td>
                            <td>{{ $code->to }}</td>
                            <td>
                                <form action="{{ route('codes.destroy',$code->id) }}" method="POST">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a class="btn btn-info btn-sm" href="{{ route('codes.show',$code->id) }}">{{__('Show')}}</a>
                        
                                        <a class="btn btn-blue btn-sm" href="{{ route('codes.edit',$code->id) }}">{{__('Edite')}}</a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-sm">{{__('Remove')}}</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                {!! $codes->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

