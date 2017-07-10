@extends('layouts.front')

@section('title', $nota->titulo)
@push('metas')
@include('front.partials.meta')
@endpush
@section('content')
@push('css')
<style>.pagination-row {padding-bottom: 30px;}</style>
@endpush
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-list p-b m-b-md">
                    <div class="blog-post">
                        <div class="date bg-edit text-edit">
                            {{ $nota->created_at->format('d') }}
                            <span>{{ $nota->created_at->format('M Y') }}</span>
                        </div>
                        <h4>
                            {{ $nota->titulo }}
                        </h4>
                        <ul class="post-meta">
                            <li class="text-edit">
                                <i class="fa fa-user"></i>
                                Enviado por:
                                <a href="#0">{{ $nota->postea }}</a>
                            </li>
                        </ul>
                        <blockquote class="quote-post">
                            <p>
                                {!! $nota->intro !!}
                            </p>
                        </blockquote>
                        <a href="{{ asset('/publicaciones/'. $nota->publicacion ) }}" target="_parent">Descargar Material</a>
                    </div>
                </div>
                <div class="widget text-center">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            comparte esta publicación
                        </h5>
                    </div>
                    <div class="widget-social-icons">
                        <ul class="social-icons list-unstyled text-center">   
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('notas', $nota->url) }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="social-icon"> 
                                    <i class="fa fa-facebook fa-border fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('notas', $nota->url) }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="social-icon"> 
                                    <i class="fa fa-twitter fa-border fa-2x"></i>
                                </a>
                            </li>
                        </ul>                    
                    </div>
                </div>
                <div class="pagination-row">
                    <div class="pagination-post">
                    @if($previous)
                        <div class="col-sm-{{ !$next ? '12' : '6' }}">
                            <div class="prev-post text-left">
                                <a href="{{ route('notas', $previous->url) }}">
                                    <p>
                                        {{ $previous->titulo }}
                                        <span>
                                            <i class="fa fa-long-arrow-left"></i>
                                            Publicación Anterior
                                        </span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endif
                    @if($next)
                        <div class="col-sm-{{ !$previous ? '12' : '6' }}">
                            <div class="next-post text-right">
                                <a href="{{ route('notas', $next->url) }}">
                                    <p>
                                        {{ $next->titulo }}
                                        <span>
                                            Publicación Anterior
                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </p>
                                </a>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('front.partials.widgets.widgets')
            </div>
        </div>
    </div>
</section>
@endsection