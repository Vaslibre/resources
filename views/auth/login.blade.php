@extends('layouts.front')

@section('content')
<section id="login" class="login p-y-lg bg-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center subscription">
                <h4 class="m-t-lg m-b-0 text-left center-md">¡bienvenido!</h4>
                <p class="lead text-left center-md m-b-md">ingresa a tu cuenta</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="sfEmail" class="">Tu correo</label>
                        <input type="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Coloca tu correo" required="">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="sfPassword" class="">Password</label>
                        <input id="password" type="password" class="form-control" name="password"  placeholder="Coloca tu Password" required="">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label class="">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>recuerdame
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-blue text-uppercase">ingresar</button>
                    </div>
                </form>
                <div class="forgot text-left">
                    <a  href="{{ route('password.request') }}">
                        clic aquí si olvidaste tu contraseña
                    </a>              
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
