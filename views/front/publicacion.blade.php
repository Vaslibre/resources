@extends('layouts.front')
@section('title', $nota->titulo)
@push('metas')
@include('front.partials.meta')
@endpush
@section('content')
@push('css')
<style>.pagination-row{padding-bottom: 30px;}.disqus-placeholder.is-hidden{display:none;}</style>
@endpush
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-list p-b m-b-md">
                    <div class="blog-post">
                        <div class="date">
                            {{ $nota->created_at->format('d') }}
                            <span>{{ $nota->created_at->format('M Y') }}</span>
                        </div>
                        <h4>
                            {{ $nota->titulo }}
                        </h4>
                        <ul class="post-meta">
                            <li>
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
                    </div><br>
                    @include('front.partials.banner')
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
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog', $nota->url) }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="social-icon"> 
                                    <i class="fa fa-facebook fa-border fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog', $nota->url) }}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="social-icon"> 
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
                <div class="widget text-left m-t-lg">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            únete a la discusión
                        </h5>
                    </div>
                    <div id="disqus_thread"></div>
                    <div class="disqus-placeholder">Loading comments...</div>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" target="_blank">comments powered by Disqus.</a></noscript>
                </div>                                            
            </div>
            <div class="col-md-4">
                @include('front.partials.widgets.widgets')
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src="{{ asset('js/jquery.disqusloader.js') }}"></script>
<script>
$.disqusLoader( '#disqus_thread', {
    scriptUrl:		'https://vaslibre.disqus.com/embed.js',
	disqusConfig:	function() {
        this.page.identifier 	= '{{ $nota->id }}';
		this.page.url			= "{{ route('blog', $nota->url) }}";
		this.page.title			= '{{ $nota->titulo }}';
        this.callbacks.onReady  = [function() {
            $( '.disqus-placeholder' ).addClass( 'is-hidden' );
        }];
	}
});
</script>
@endpush