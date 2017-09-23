<!-- Name Form Input -->
<div class="form-group @if ($errors->has('titulo')) has-error @endif">
    {!! Form::label('titulo', 'Titulo del Banner') !!}
    {!! Form::text('titulo', $banner->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}
    @if ($errors->has('titulo')) <small class="help-block">{{ $errors->first('titulo') }}</small> @endif
</div>
<div class="form-group @if ($errors->has('url_site')) has-error @endif">
    {!! Form::label('url_site', 'Url del Site') !!}
    {!! Form::text('url_site', $banner->url_site, ['class' => 'form-control', 'placeholder' => 'Url del Site']) !!}
    @if ($errors->has('url_site')) <small class="help-block">{{ $errors->first('url_site') }}</small> @endif
</div>
<div class="form-group @if ($errors->has('url_banner')) has-error @endif">
    {!! Form::label('url_banner', 'Url del Banner') !!}
    {!! Form::text('url_banner', $banner->url_banner, ['class' => 'form-control', 'placeholder' => 'Url del Banner']) !!}
    @if ($errors->has('url_banner')) <small class="help-block">{{ $errors->first('url_banner') }}</small> @endif
</div>