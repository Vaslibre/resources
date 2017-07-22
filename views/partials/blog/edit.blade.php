@extends('layouts.front')
@section('title','Crear un nuevo post')
@push('metas')
@endpush
@section('content')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<style>
.btn,.btn.active:focus,.btn:active:focus,.btn:focus,.btn:hover,a.btn,a.btn.active:focus,a.btn:active:focus,a.btn:focus,a.btn:hover{color:#000}body{background-color:#f0f0f0}.panel{border-radius:0}.btn,a.btn{white-space:inherit;display:inline-block;margin-right:0}section.p-y-md{min-height:506px}.blog-list{margin-bottom:0;padding-bottom:0;border-bottom:0}.form-group button{width:inherit}.form-group.note-group-select-from-files{display:none}</style>
@endpush
<section class="p-y-md">
<div class="mainbody container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="panel panel-default blog-post">
                <div class="panel-body">
                    <span class="clearfix">
                        <h2 class="panel-title pull-left" style="font-size:30px;">
                            Crear un post
                        </h2>                      
                    </span>
                    <hr> 
                    {!! Form::model($notas, ['route' => ['post.update',  $notas->id ], 'method' => 'PUT', 'button' => 'Crear Publicacion']) !!}
                    @include('partials.blog.partials.form')
                    <!-- Submit Form Button -->
                    {!! Form::submit('Actualizar Publicación', ['class' => 'btn btn-green']) !!}
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@push('script')

    <script src="{{ asset('js/summernote.min.js') }}"></script>
    <script src="{{ asset('js/summernote-image-attributes.js') }}"></script>
    <script src="{{ asset('lang/summernote-es-ES.min.js') }}"></script>
<script>
$(document).ready(function () {
    $('#summernote').summernote({
        lang: 'es-ES',
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['insert', ['picture', 'link', 'video']],
            // ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            //['height', ['height']],
            ['misc', ['undo', 'redo',]],
        ],
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
            link: [
                ['link', ['linkDialogShow', 'unlink']]
            ],
            air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
            ]
        },
        placeholder: 'Escribe acá todo el contenido del post...',
        disableDragAndDrop: true,
    });
});
</script>
@endpush