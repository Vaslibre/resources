@extends('app')
@section('title')
    Crear Album
@endsection

@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">create Album</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Admin Home</a></li>
                    <li class="active">create an album</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t p-y-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Image to Album
                    </div>
                    <div class="panel-body">
                        @include('validation.validation')
                        @include('admin.addimage.partials.form', ['album' => $image, 'id' => $id, 'route' => 'addimage.store', 'method' => 'POST', 'button' => 'Create!'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
