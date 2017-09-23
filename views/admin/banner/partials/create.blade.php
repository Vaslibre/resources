@extends('layouts.front')
@section('title', 'Create')

@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">
                    Create
                </h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li><a href="{{ route('users.index') }}">user list</a></li>
                    <li class="active">create user</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t p-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! Form::open(['route' => ['banner.store'] ]) !!}
                    @include('admin.banner.partials._form')
                    <!-- Submit Form Button -->
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection