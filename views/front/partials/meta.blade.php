
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $nota->titulo }}">
    <meta property="og:url" content="{{ route('blog', $nota->url) }}">
    <meta property="og:description" content="{{ str_limit($nota->intro, 147) }}">
    <meta property="article:published_time" content="{{ $nota->created_at->format('d/m/Y') }}">
    <meta name="twitter:title" content="{{ $nota->titulo }}">
    <meta name="twitter:description" content="{{ str_limit($nota->intro, 147) }}">
    <meta name="description" content="{{ str_limit($nota->intro, 147) }}">
    <meta name="twitter:creator" content="@vaslibre">
    <meta property="og:image" content="{{ asset('imagenes/logo-vaslibre300x300.png') }}">
    <meta name="twitter:image" content="{{ asset('imagenes/logo-vaslibre300x300.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <link rel="canonical" href="{{ route('blog', $nota->url) }}">