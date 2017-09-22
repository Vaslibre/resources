@extends('layouts.front')

@section('content')
<section id="login" class="login p-y-lg bg-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center subscription">
                <h4 class="m-t-lg m-b-0 text-left center-md">Let's get started</h4>
                <p class="lead text-left m-b-md center-md">Signin up for GetLeads is faster and free</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" id="signupForm" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="sfName">Full Name</label>
                        <input id="sfName" type="text" class="form-control" placeholder="Enter your Full Name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sfEmail">Email Address</label>
                        <input id="sfEmail" type="email" class="form-control" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sfPassword">Password</label>
                        <input id="sfPassword" type="password" class="form-control" placeholder="Enter your Password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your Password" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <label for="sfnickName">Nick</label>
                        <input id="sfnickName" type="text" class="form-control" placeholder="Enter your nick name" name="nick" value="{{ old('nick') }}">
                        @if ($errors->has('nick'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nick') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Recaptcha::render() !!}
                        @if ($errors->has('g-recaptcha-response'))
                        <small class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </small>
                        @endif
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-blue">SIGN UP</button>
                    </div>
                </form>
                <p class="terms m-t">By clicking Signup you agree to the <a href="#0" class="f-w-700">Terms</a> and <a href="" class="f-w-700">Privacy Policy</a>.</p>
                <p class="terms"> Already have a GetLeads account? <a href="#0" class="f-w-700">Sign in</a>.</p>
            </div>
        </div>
    </div>
</section>
@endsection
