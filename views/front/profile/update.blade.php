@extends('layouts.front')
@section('title','El perfil de ' . $result->name)
@push('metas')
{{-- @include('front.partials.meta') --}}
@endpush
@section('content')
@push('css')
<style>
body{background-color:#f0f0f0;}.panel{border-radius:0;}.btn,a.btn{white-space:inherit;}section.p-y-md {min-height:506px;}.blog-list{margin-bottom: 0;padding-bottom: 0;border-bottom: 0;}</style>
@endpush
<section class="p-y-md">
<div class="mainbody container">
    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <img class="img-responsive" src="@myGravatar($result->email, ['s'=> 300, 'd'=>'mm', 'secure' => true])">
                        @if(Auth::check() && Auth::user()->id == $result->id)
                        <br>
                        <small class="mt">
                            Cambia esta imagen en:
                            <a href="http://gravatar.com" target="_blank">gravatar.com</a>
                        </small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default blog-post">
                <div class="panel-body">
                    <span class="clearfix">
                        <h1 class="panel-title pull-left" style="font-size:30px;">
                            Actualiza tu perfil
                        </h1>                      
                    </span>
                    <hr>
                    @include('partials.error')
{!! Form::model($result, [
    'route'    => ['profile.update', $result->id],
    'method'    => 'put',
    'enctype'   => 'multipart/form-data',
    'id'        => 'profileForm'
]) !!}
                    <div class="form-group">
                        <label for="inputNick">Actualiza tu nombre</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Tu nombre de usuario" value="{{ $result->name }}">
                    </div>
                    <div class="form-group">
                        <label for="inputNick">Actualiza tu nombre de usuario</label>
                        <input type="text" class="form-control" id="inputNick" name="inputNick" placeholder="Tu nombre de usuario" value="{{ $result->nickname }}">
                    </div>
                    <div class="form-group">
                        <label for="inputBio">Crea una Bio</label>
                        <textarea class="form-control" rows="3" id="inputBio" name="inputBio" placeholder="Crea una bio de no más de 140 caracteres...">{{ $result->bio }}</textarea>
                    </div> 
                    <button type="submit" class="btn btn-success">
                        ¡Actualizar!
                    </button>
                    <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
{!! Form::close() !!}                    

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@push('script')
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
})
</script>
@endpush