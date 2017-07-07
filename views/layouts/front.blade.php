<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vaslibre - @yield('title')</title>
    <link rel="dns-prefetch" href="{{ route('home') }}"/>
    <link rel="dns-prefetch" href="//www.gstatic.com"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
    <link rel="dns-prefetch" href="//fonts.googleapis.com"/>
    <link rel="dns-prefetch" href="//twemoji.maxcdn.com"/>    
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/iconfont.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/loaders.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/pickadate-default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/pickadate-default.date.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="adblock" content="disable" />
    <meta name="wot-verification" content="bd1fa12c7dd952ea98e8" />
    <meta name="y_key" content="e6cb92c08209d989" /> 
    <meta name="msvalidate.01" content="EBCDA2C5F9E226DD58BFAA4BD0D15681" />
    <meta name="google-site-verification" content="mGx5usBCDyvfDVrmqWE7ojt4xaVGF8BMbUTNUOh8gIo" /> <!--google-->
    <meta name="alexaVerifyID" content="5A6vXOKuR8msgNmH9jEsl3IIWVU" />
    <meta name="DC.title" content="Grupo de Software libre de Valencia Venezuela" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.language" content="es-VE" />
    <meta name="geo.region" content="VE-G" />
    <meta name="geo.placename" content="Valencia" />
    <meta name="geo.position" content="10.181808;-68.004684" />
    <meta name="ICBM" content="10.181808, -68.004684" />
    <link rel="openid.server" href="http://openid.es/index.php/serve" />
    <link rel="openid.delegate" href="http://vaslibre.openid.es" />    
    <meta name="keywords" content="Valencia, software libre, linux, Venezuela, Carabobo, vaslibre, gnu, glove, solve, GNU/Linux, open, source, open source, ponencias, articulos, eventos, Techlan, FliSol, glove, cnsl, distros, distribuciones, gnu/linux, ubuntu, debian, fedora, geento, opensuse" /> 
    <meta name="theme-color" content="#ffffff">        
    <meta name="keywords" content="">
    <meta name="author" content="Angel Cruz <me@abr4xas.org>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="pragma" content="cache">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="vary" content="content-language">
    <meta http-equiv="Cache-control" content="max-age=2592000, public">
    <meta http-equiv="content-style-type" content="text/css">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="medium" content="mult">
    <meta name="adblock" content="disable">
    <meta name="rating" content="General">
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="1 days">
    <meta name="revisit" content="1">
    <meta name="robots" content="index,follow">
    <meta name="no-email-collection" content="http://www.unspam.com/noemailcollection/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@vaslibre">
    <meta property="og:site_name" content="Vaslibre">
    <meta property="og:locale" content="{{ app()->getLocale() }}">    
    @stack('metas')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>@import  url('https://fonts.googleapis.com/css?family=Dosis:400,700|Open+Sans:400,400i,700,700i');body{font-size: 18px;color: #6b7073;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:"Dosis",sans-serif;margin-top: 40px}h1,.h1,h2,.h2,h3,.h3,h4,.h4, h5,.h5,h6,.h6{font-family:"Dosis",sans-serif;text-transform:uppercase;font-weight:700;color:#6b7073;}p{font-size:24px;letter-spacing:1px;line-height:28px;}.img-responsive{margin: 0 auto}.blog-post .post-meta {
    margin-left: inherit;
    font-size: 16px;
    line-height: 29px;
}pre {
    white-space: pre-wrap;
}
.blog-post h4 {
    margin-left: inherit;
}
img:before {
    content: "The image below is broken :(";
    display: block;
    margin-bottom: 10px;
    font-size: 14px;
    color: rgb(100, 100, 100);
}

img:before {
    content: "The image below is broken :(";
    display: block;
    margin-bottom: 10px;
    font-size: 14px;
    color: rgb(100, 100, 100);
}
.js-cookie-consent.cookie-consent {position: fixed;bottom: 0;margin: 0;padding: 20px;text-align: center;width: 100%;background-color: #f0f2f1;z-index: 9}span.cookie-consent__message {color: #1F1F21;}button.js-cookie-consent-agree {border: none;border-radius: 3px;background: #f4645f;padding: 10px 15px;font-size: 16px;color: #fff;}
</style>
@stack('css')
</head>

<body data-spy="scroll" data-target="#main-navbar">
    <div class="loader bg-white">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="main-container" id="page">
        <header id="nav1-1">
            <nav class="navbar navbar-fixed-top" id="main-navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{ route('home') }}" class="navbar-brand smooth-scroll">
                            <img src="{{ asset('imagenes/logo-black.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li {{ ($current == 'home' ? 'class=active' : '') }} >
                                <a href="{{ route('home') }}">
                                    Inicio
                                </a>
                            </li>
                            <li {{ ($current == 'nosotros' ? 'class=active' : '') }} >
                                <a href="{{ route('nosotros') }}">
                                    Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Galería
                                </a>
                            </li>
                            <li {{ ($current == 'notas' ? 'class=active' : '') }}>
                                <a href="{{ route('notas') }}">
                                    Publicaciones
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn-nav btn-green smooth-scroll">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer id="footer6-2" class="footer f6 p-y-md bg-edit bg-dark">
        </footer>
        <a href="#" class="top">Top</a>
    </div>
    <script src="{{ asset('js/plugins/jquery1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.easing.1.3.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.formchimp.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.jCounter-0.1.4.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugins/twitterFetcher_min.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('js/plugins/picker.js') }}"></script>
    <script src="{{ asset('js/plugins/picker.date.js') }}"></script>
    <!-- Custom Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js" integrity="sha256-RWiU4omUU7tQ2M3wmRQNW9UL50MB4CucbRPCbsQv+X0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            // Set the Options for "Bloodhound" suggestion engine
            var engine = new Bloodhound({
                remote: {
                    url: '/find?q=%QUERY%',
                    wildcard: '%QUERY%'
                },
                datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
                queryTokenizer: Bloodhound.tokenizers.whitespace
            });

            $(".search-input").typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                source: engine.ttAdapter(),

                // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                name: 'postList',

                // the key from the array we want to display (name,id,email,etc...)
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">No encontré lo que buscas</div></div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function (data) {
                        return '<a href="/blog/'+ data.url + '" class="list-group-item">' + data.titulo +  '</a>'
                        console.log(data);
                    }
                }
            });
        });
    </script>    
</body>

</html>