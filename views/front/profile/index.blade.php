@extends('layouts.front')
@section('title','El perfil de ' . ucwords($result->name))
@push('metas')
{{-- @include('front.partials.meta') --}}
@endpush
@section('content')
@push('css')
<style>
body{background-color:#f0f0f0;}.panel{border-radius:0;}.btn,a.btn{white-space:inherit;}section.p-y-md {min-height:506px;}.blog-list{margin-bottom: 0;padding-bottom: 0;border-bottom: 0;}</style>
@endpush
<section class="p-y-md">
<div class="mainbody container">
    <div class="row">
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <img class="img-responsive" src="@myGravatar($result->email, ['s'=> 300, 'd'=>'mm', 'secure' => true])">
                        @member($result->id)
                        <br>
                        <small class="mt">
                            Cambia esta imagen en:
                            <a href="http://gravatar.com" target="_blank">gravatar.com</a>
                        </small>
                        @endmember
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('front.partials.widgets.popular')
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default blog-post">
                <div class="panel-body">
                    <span class="clearfix">
                        <h1 class="panel-title pull-left" style="font-size:30px;">
                            {{ $result->name }}
                        </h1>
                        @member($result->id)
                        <div class="btn-group pull-right" role="group" aria-label="...">
                            <a href="{{ route('profile.edit', $result->nickname) }}" type="button"  class="btn btn-success text-capitalize">
                                editar perfil
                            </a>
                        </div>
                        @endmember
                    </span>
                    @if(!empty($result->bio))
                    <blockquote class="quote-post">
                        <p>
                            {{ $result->bio }}
                        </p>
                    </blockquote>
                    @endif
                    <hr>
                    <ul class="list-inline">
                        <li>Miembro desde {{ $result->created_at->diffForHumans() }}.</li>
                    </ul>
                </div>
            </div>
            <hr>
            @foreach($notas as $item)
                @guest($result->id)
                    @if($item->publicado == 0)
                        @continue;
                    @endif
                @endguest
                <div class="panel panel-default">
                    <div class="panel-body clearfix">
                    @include('front.partials.blog-list', ['item' => $item, 'url' => 'blog'])
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                {!! $notas->links() !!}
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@push('script')
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
})
</script>
@endpush