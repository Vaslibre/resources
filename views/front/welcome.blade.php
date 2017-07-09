@extends('layouts.front')
@section('title', 'Valencia Software Libre - Venezuela')

@push('metas')
    <meta property="og:type" content="website">
    <meta property="og:title" content="VaSLibre - Valencia Software Libre - Venezuela">
    <meta property="og:url" content="{{ route('home') }}">
    <meta property="og:description" content="Grupo de usuarios de Software Libre Valencia - Carabobo - Venezuela. Difundiendo el uso de tecnologia libre. ">
    <meta name="twitter:title" content="VaSLibre - Valencia Software Libre - Venezuela">
    <meta name="twitter:description" content="Grupo de usuarios de Software Libre Valencia - Carabobo - Venezuela. Difundiendo el uso de tecnologia libre. ">
    <meta name="twitter:creator" content="@vaslibre">
    <meta property="og:image" content="{{ asset('imagenes/logo-vaslibre300x300.png') }}">
    <meta name="twitter:image" content="{{ asset('imagenes/logo-vaslibre300x300.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <link rel="canonical" href="{{ route('home') }}">
    <meta name="description" content="Grupo de usuarios de Software Libre Valencia - Carabobo - Venezuela. Difundiendo el uso de tecnologia libre. " />

@endpush
@push('css')
<style>.blog-post{margin-bottom: 20px;}</style>
@endpush
@section('content')
<section class="p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            @foreach($result as $item)
                @include('front.partials.blog-list', ['item' => $item, 'url' => 'blog'])
            @endforeach
                <div class="text-center">
                    {!! $result->links() !!}
                </div>
            </div>
            <div class="col-md-4">
            @include('front.partials.widgets.widgets')
            </div>
        </div>
    </div>
</section>
@endsection