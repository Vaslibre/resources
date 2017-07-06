@extends('layouts.front')
@section('content')
@push('css')
<style>.pagination-row {
    padding-bottom: 30px;
}</style>
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

                        {!! $nota->texto !!}
                    </div>
                </div>

                <div class="widget text-center">
                    <div class="w-title">
                        <h5 class="m-b-md">Share this post</h5>
                    </div>
                    <div class="w-social social-btn">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog', $nota->url) }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="sb-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/share?text={{ $nota->titulo }}&amp;url={{ route('blog', $nota->url) }}" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"class="sb-twitter">
                            <i class="fa fa-twitter"></i>
                        
                        </a>                        
                    </div>
                </div>

                <div class="pagination-row">
                    <div class="pagination-post">
                    @if($previous)
                        <div class="col-sm-{{ !$next ? '12' : '6' }}">
                            <div class="prev-post text-left">
                                <a href="{{ route('blog', $previous->url) }}">
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
                                <a href="{{ route('blog', $next->url) }}">
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