@extends('layouts.front')

@section('title', 'Users')

@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">manage your users</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Admin Home</a></li>
                    <li class="active">user list</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t-lg p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3 class="modal-title">{{ $result->total() }} {{ str_plural('User', $result->count()) }} </h3>
            </div>
            {{--  <div class="col-md-7 page-action text-right">
                @can('add_users')
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                @endcan
            </div>  --}}
            <div class="col-md-12">
                <div class="result-set">
                    <table class="table table-bordered table-striped table-hover" id="data-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            @can('edit_users', 'delete_users')
                            <th class="text-center">Actions</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->roles->implode('name', ', ') }}</td>
                                <td>{{ $item->created_at->toFormattedDateString() }}</td>

                                @can('edit_users')
                                <td class="text-center">
                                    @include('admin.shared._actions', [
                                        'entity' => 'users',
                                        'id' => $item->id
                                    ])
                                </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {{ $result->links() }}
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
@endsection