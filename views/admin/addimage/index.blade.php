@extends('app')
@section('title') Album List @endsection
@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">album list</h1>
            </div>
            <div class="col-sm-6 text-right text-capitalize text-white">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Admin Home</a></li>
                    <li><a href="{{ route('album.create') }}">create an album</a></li>
                    <li class="active">album list</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="p-t-lg p-y-md">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
            <img src="{{ ImageHandler::thumb($image->image) }}"/>
            @endforeach
        </div>
    </div>
</section>
@endsection
