@extends('layouts.admin-app')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body"><!-- CRM stats -->
            <div class="row">
                <div class="card">
                    <div class="pull-right">
                        <a class="btn btn-blue float-right" href="{{ route('clients.create') }}">{{__('Create new Clients')}}</a>
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
                            <th>{{__('Mobile')}}</th>
                            <th width="250px">{{__('Action')}}</th>
                        </tr>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $client->name_ar }}</td>
                            <td>{{ $client->name_en }}</td>
                            <td>{{ $client->mobile }}</td>
                            <td>
                                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a class="btn btn-warning btn-sm" href="{{ route('clients.codes',$client->id) }}">{{__('Codes')}}</a>
                                        <a class="btn btn-info btn-sm" href="{{ route('clients.show',$client->id) }}">{{__('Show')}}</a>
                        
                                        <a class="btn btn-blue btn-sm" href="{{ route('clients.edit',$client->id) }}">{{__('Edite')}}</a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-sm">{{__('Remove')}}</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                {!! $clients->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

