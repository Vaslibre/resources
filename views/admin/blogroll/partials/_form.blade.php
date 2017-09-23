<!-- Name Form Input -->
<div class="form-group @if ($errors->has('titulo')) has-error @endif">
    {!! Form::label('titulo', 'Titulo del Sitio') !!}
    {!! Form::text('titulo', $blogroll->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}
    @if ($errors->has('titulo')) <small class="help-block">{{ $errors->first('titulo') }}</small> @endif
</div>
<div class="form-group @if ($errors->has('url_site')) has-error @endif">
    {!! Form::label('url_site', 'Url del Site') !!}
    {!! Form::text('url_site', $blogroll->url_site, ['class' => 'form-control', 'placeholder' => 'Url del Site']) !!}
    @if ($errors->has('url_site')) <small class="help-block">{{ $errors->first('url_site') }}</small> @endif
</div>