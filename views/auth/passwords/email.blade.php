@extends('layouts.front')
@push('css')
<style>.btn, a.btn {    white-space: inherit; }</style>
@endpush
@push('script')
@if (session('status'))
    <script>
    swal({
        title: '',
        text: "{{ session('status') }}",
        type: 'info',
        confirmButtonText: 'Cool'
    })
    </script>
@endif   
@endpush
@section('content')
<section id="login" class="login p-y-lg bg-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center subscription">         
                <h4 class="m-t-lg m-b-0 text-left center-md">¡bienvenido!</h4>
                <p class="lead text-left center-md m-b-md">para iniciar necesitamos tu correo</p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Indica tu correo">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-blue text-uppercase">
                            iniciar proceso de cambio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
