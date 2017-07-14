@extends('app')
@section('title') Editar: {{ $category->name }} @endsection
@push('styles')
    <style>.form-group button {width: inherit;}.btn, a.btn {display: inline-block;color: #000;}.btn:focus, a.btn:focus, .btn:hover, a.btn:hover, .btn.active:focus, a.btn.active:focus, .btn:active:focus, a.btn:active:focus{color: #000;}
@media (min-width: 768px) {
    .modal-md {
        width: 390px;
    }
}
    </style>
@endpush
@section('content')
<section class="page-head bg-img text-white p-y-md" style="background-image:url('{{ asset('/images/bg/background.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0">Editar: {{ $category->name }}</h1>
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
            <div class="col-md-12">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#album" aria-controls="album" role="tab" data-toggle="tab">
                                Editar Album
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#images" aria-controls="images" role="tab" data-toggle="tab">
                                Editar imagenes asociadas a este albm
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="album">
                            <div class="panel panel-default">
                                <div class="panel-heading text-capitalize">
                                    Editar categoria: <i>{{ $category->name }}</i>
                                </div>
                                <div class="panel-body">
                                    @include('validation.validation')
                                    @include('admin.albums.partials.form', ['album' => $category, 'route' => ['album.update', $category->id], 'method' => 'PUT', 'button' => '¡Actualizar!', 'idForm' => 'albumupdate', 'image' => 'new_cover_image'])
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="images">
                        @foreach($category->photos as $photo)
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="{{$category->name}}" src="{{ asset('images/thumb/'.$photo->thumb) }}">
                                    <div class="caption">
                                        <a href="" onclick="returnconfirm('Are you sure?')">
                                            <button type="button"class="btn btn-danger btn-small">Delete Image</button>
                                        </a>
                                        <p>Move image to another Album :</p>
                                        {!! Form::model($album, [
                                            'route'     => 'move_image',
                                            'method'    => 'POST',
                                            'enctype'   => 'multipart/form-data',
                                            'name'      => 'movephoto'
                                        ]) !!}
                                            <select name="new_album" class="form-control">
                                                <option value="0">Seleccione</option>
                                                @foreach($album as $others)
                                                <option value="{{ $others->id }}" {{ ($category->id == $others->id ) ? 'selected' : ''}}>{{$others->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="photo"value="{{ $photo->id }}" />
                                            <button type="submit" class="btn btn-small btn-info" onclick="return confirm('Are you sure?')">Move Image</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
