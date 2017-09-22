@extends('layouts.front')

@section('content')
<section class="page-head bg-img p-y-md" style="background-image:url('{{ asset('/images/polygonal.jpg') }}')">
    <div class="container">
        <div class="row c2 h-bg text-white">
            <div class="col-sm-6">
                <h1 class="h3 f-w-900 m-b-0 text-white">login</h1>
            </div>
        </div>
    </div>
</section>
<section id="login" class="login p-y-md">
    <div class="container">
        <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-danger p-y">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif           
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center subscription">         
                <h4 class="m-t-lg m-b-0 text-left center-md">Welcome Back.</h4>
                <p class="lead text-left center-md m-b-md">Login to your account</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="sfEmail" class="f-w-700">Email Address</label>
                        <input type="email" class="form-control" id="sfEmail" placeholder="Enter your Email" required="" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="sfPassword" class="f-w-700">Password</label>
                        <input type="password" class="form-control" id="sfPassword" name="password" placeholder="Enter your Password" required="">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label class="f-w-700">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Recaptcha::render() !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-blue">LOGIN</button>
                    </div>
                </form>
                {{--  <div class="meta clearfix">
                    <div class="forgot pull-left">
                        <a href="{{ url('/password/reset') }}" class="f-w-700">
                            Forgot Password?
                        </a>
                    </div>             
                </div>  --}}
            </div>
        </div>
    </div>
</section>
@endsection
