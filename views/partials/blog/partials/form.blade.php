<div class="form-group @if ($errors->has('title')) has-error @endif">
    {!! Form::text('titulo', $blog->title, ['class' => 'form-control', 'placeholder' => 'Titulo de la publicación']) !!}
    @if ($errors->has('title')) <p class="text-danger small">{{ $errors->first('title') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('description')) has-error @endif">
    {!! Form::text('description', $blog->description, ['class' => 'form-control', 'placeholder' => 'Intro de la publicación']) !!}
    @if ($errors->has('description')) <p class="text-danger small">{{ $errors->first('description') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('content')) has-error @endif">
    {!! Form::textarea('content', $blog->content, ['class' => 'form-control', 'placeholder' => 'Intro de la publicación', 'id' => 'summernote']) !!}
    @if ($errors->has('content')) <p class="text-danger small">{{ $errors->first('content') }}</p> @endif
</div>