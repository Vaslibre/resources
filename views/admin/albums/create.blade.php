@extends('app')
@section('title')
    Crear Album
@endsection
@push('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <style>.form-group button {width: inherit;}.btn, a.btn {display: inline-block;color: #000;}.btn:focus, a.btn:focus, .btn:hover, a.btn:hover, .btn.active:focus, a.btn.active:focus, .btn:active:focus, a.btn:active:focus{color: #000;}</style>
@endpush
@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">create a new category</h1>
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
<section class="p-t p-y">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-capitalize">
                        create a new category
                    </div>
                    <div class="panel-body">
                        @include('validation.validation')
                        @include('admin.albums.partials.form', ['album' => $album, 'route' => 'album.store', 'method' => 'POST', 'button' => 'Create!', 'idForm' => 'albumform', 'image' => 'cover_image'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush
