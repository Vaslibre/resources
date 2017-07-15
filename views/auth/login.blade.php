@extends('layouts.front')

@section('content')
<style>.btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child {position: absolute;left: 0;top: 0;bottom: 0;width: 60px;line-height: 34px;font-size: 1.6em;text-align: center;border-right: 1px solid rgba(0,0,0,0.2);}.btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding-left:0;padding-right:0}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}.btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon :first-child{border:none;text-align:center;width:100% !important}.btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}.btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}.btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}.btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:hover,.btn-github:focus,.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,0.2)}.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{background-image:none}.btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google-plus:hover,.btn-google-plus:focus,.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,0.2)}.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{background-image:none}.btn-google-plus.disabled,.btn-google-plus[disabled],fieldset[disabled] .btn-google-plus,.btn-google-plus.disabled:hover,.btn-google-plus[disabled]:hover,fieldset[disabled] .btn-google-plus:hover,.btn-google-plus.disabled:focus,.btn-google-plus[disabled]:focus,fieldset[disabled] .btn-google-plus:focus,.btn-google-plus.disabled:active,.btn-google-plus[disabled]:active,fieldset[disabled] .btn-google-plus:active,.btn-google-plus.disabled.active,.btn-google-plus[disabled].active,fieldset[disabled] .btn-google-plus.active{background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-twitter{color:#fff;background-color:#2ba9e1;border-color:rgba(0,0,0,0.2)}.btn-twitter:hover,.btn-twitter:focus,.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#1c92c7;border-color:rgba(0,0,0,0.2)}.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{background-image:none}.btn-twitter.disabled,.btn-twitter[disabled],fieldset[disabled] .btn-twitter,.btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled:active,.btn-twitter[disabled]:active,fieldset[disabled] .btn-twitter:active,.btn-twitter.disabled.active,.btn-twitter[disabled].active,fieldset[disabled] .btn-twitter.active{background-color:#2ba9e1;border-color:rgba(0,0,0,0.2)}.btn, a.btn {white-space: inherit;}</style>
<section id="login" class="login p-y-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center subscription">
                <h4 class="m-t-lg m-b-0 text-left center-md">¡bienvenido!</h4>
                <p class="lead text-left center-md m-b-md">ingresa a tu cuenta</p>
                <div class="form-group">
                    <div class="col-md-12">
                        {{-- <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a> --}}
                        <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                        <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter">
                            <i class="fa fa-twitter"></i> Sign in with Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
