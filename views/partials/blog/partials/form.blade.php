<div class="form-group @if ($errors->has('titulo')) has-error @endif">
    {!! Form::text('titulo', $notas->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo de la publicación']) !!}
    @if ($errors->has('titulo')) <p class="text-danger small">{{ $errors->first('titulo') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('intro')) has-error @endif">
    {!! Form::text('intro', $notas->intro, ['class' => 'form-control', 'placeholder' => 'Intro de la publicación']) !!}
    @if ($errors->has('intro')) <p class="text-danger small">{{ $errors->first('intro') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('texto')) has-error @endif">
    {!! Form::textarea('texto', $notas->texto, ['class' => 'form-control', 'placeholder' => 'Intro de la publicación', 'id' => 'summernote']) !!}
    @if ($errors->has('texto')) <p class="text-danger small">{{ $errors->first('texto') }}</p> @endif
</div>

@if(auth()->user()->can('add_publish'))
<div class="form-group @if ($errors->has('texto')) has-error @endif">
    <select class="form-control" name="publicado">
        <option value="1" {{ $notas->publicado == 1 ? 'selected' : ''}}>Publicado</option>
        <option value="0" {{ $notas->publicado == 0 ? 'selected' : ''}}>No Publicado</option>
    </select>
    @if ($errors->has('texto')) <p class="text-danger small">{{ $errors->first('texto') }}</p> @endif
</div>
@endif