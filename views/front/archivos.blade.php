@extends('layouts.front') 

@section('title', 'Archivos')
@push('css')
<style>.pagination-row{padding-bottom: 30px;}.disqus-placeholder.is-hidden{display:none;}.blog-list{border-bottom: transparent;}hr.pacman {border: 0;height: 25px;background-image: url('https://www.formget.com/wp-content/uploads/2014/12/type_3.png');background-repeat: no-repeat;background-position: center;}</style>
@endpush
@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-list p-b m-b-md">
                    <div class="blog-post">
                        <h2 class="m-b-md">
                            archivo de publicaciones
                        </h2>
                        <blockquote class="quote-post">
                            <p>
                                Selecciona el mes para ver las publicaciones realizadas en esa fecha
                            </p>
                        </blockquote>
                        <hr class="pacman">
                        <div class="widget">
                            <div class="w-tags">
                                <ol class="list-unstyled">
                                    @foreach($archives as $stats)
                                    @if($stats['month'] == '' && $stats['year'] == 0)
                                        @continue;
                                    @endif
                                        <li>
                                            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}?utm_source={{ config('app.name') }}&utm_medium=sidebar&utm_term=publicaciones%2Bde%2B{{ $stats['month'] }}%2B{{ $stats['year'] }}&utm_content=textlink">
                                                {{ $stats['month'] .' '. $stats['year'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ol> 
                            </div>       
                        </div>
                    </div>
                </div>
                @include('front.partials.banner')
            </div>
            <div class="col-md-4">
                @include('front.partials.widgets.widgets')
            </div>
        </div>
    </div>
</section>
@endsection