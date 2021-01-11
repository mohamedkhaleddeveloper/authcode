@extends('layouts.admin-app')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body"><!-- CRM stats -->
            <div class="">
                <div class="card">
                    <div class="pull-right">
                        <a class="btn btn-blue float-right" href="{{ route('products.create') }}">{{__('Create new Product')}}</a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
           
                    <table class="table table-bordered  table-responsive">
                        <tr>
                            <th>No</th>
                            <th>{{__('Arabic Name')}}</th>
                            <th>{{__('English Name')}}</th>
                            <th>{{__('Description')}}</th>
                            <th width="250px">{{__('Action')}}</th>
                        </tr>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name_ar }}</td>
                            <td>{{ $product->name_en }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a class="btn btn-info btn-sm" href="{{ route('products.show',$product->id) }}">{{__('Show')}}</a>
                        
                                        <a class="btn btn-blue btn-sm" href="{{ route('products.edit',$product->id) }}">{{__('Edite')}}</a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-sm">{{__('Remove')}}</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

