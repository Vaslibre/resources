<!DOCTYPE html>
<!--[if lte IE 9 ]> 
<html itemscope itemtype="http://schema.org/Blog" class="ie" lang="{{ app()->getLocale() }}"> 
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<!--> 
<html itemscope itemtype="http://schema.org/Blog" lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaslibre - @yield('title')</title>
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="pragma" content="cache">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="vary" content="content-language">
    <meta http-equiv="Cache-control" content="max-age=2592000, public">
    <meta http-equiv="content-style-type" content="text/css">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ route('home') }}" rel="dns-prefetch"/>
    <link href="https://www.gstatic.com"  rel="dns-prefetch"/>
    <link href="https://fonts.gstatic.com " rel="dns-prefetch"/>
    <link href="https://fonts.googleapis.com" rel="dns-prefetch"/>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/plugins/bootstrap.min.css') }}"rel="stylesheet">
    <link href="{{ asset('css/plugins/loaders.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css" integrity="sha256-fmdDIg1KI3wbdH0gfFQGXexodQ3SQzBTHDGicLAgje8=" crossorigin="anonymous" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link href="https://plus.google.com/+VaSlibre" rel="publisher">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="adblock" content="disable" />
    <meta name="wot-verification" content="bd1fa12c7dd952ea98e8" />
    <meta name="y_key" content="e6cb92c08209d989" />
    <meta name="msvalidate.01" content="EBCDA2C5F9E226DD58BFAA4BD0D15681" />
    <meta name="google-site-verification" content="mGx5usBCDyvfDVrmqWE7ojt4xaVGF8BMbUTNUOh8gIo" />
    <meta name="alexaVerifyID" content="5A6vXOKuR8msgNmH9jEsl3IIWVU" />
    <meta name="DC.title" content="Grupo de Software libre de Valencia Venezuela" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.language" content="es-VE" />
    <meta name="geo.region" content="VE-G" />
    <meta name="geo.placename" content="Valencia" />
    <meta name="geo.position" content="10.181808;-68.004684" />
    <meta name="ICBM" content="10.181808, -68.004684" />
    <meta name="google" content="notranslate">
    <meta name="keywords" content="Valencia, software libre, linux, Venezuela, Carabobo, vaslibre, gnu, glove, solve, GNU/Linux, open, source, open source, ponencias, articulos, eventos, Techlan, FliSol, glove, cnsl, distros, distribuciones, gnu/linux, ubuntu, debian, fedora, geento, opensuse" />
    <meta name="theme-color" content="#ffffff">
    <meta name="keywords" content="">
    <meta name="author" content="Angel Cruz <me@abr4xas.org>">
    <meta name="norton-safeweb-site-verification" content="7p-ydp7smpvwo44a5to-rrbe9z0fem0gyueagbgmvlkav08rd3l9gtnpctwtwca--wwj26si8tux0asfgb2n3iiugkrj3peo05dt390wmrm1483sh7wm0rp4vhsnyjf2" />
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
    <meta name="no-email-collection" content="https://www.unspam.com/noemailcollection/">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@vaslibre">
    <meta name="publisuites-verify-code" content="aHR0cHM6Ly92YXNsaWJyZS5vcmcudmU=" />
    <meta property="og:site_name" content="Vaslibre">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <link rel="alternate" href="https://feeds.feedburner.com/Vaslibre" title="Feed de {{ config('app.name') }}" type="application/rss+xml" />
    @stack('metas')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @if(!Auth::check())
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-105362446-1', 'auto');ga('send', 'pageview');</script>
    @endif
    @stack('css')
    <style>.footer a{color:#fff;}.btn,a.btn{white-space:inherit;}</style>

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
    @include('front.partials.header')
        @yield('content')
        <footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-green">
            <div class="container">
                <div class="row text-white">
                    <div class="col-sm-6 col-xs-12">
                        <p>
                            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                                <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" />
                            </a>
                            <br />Esta obra está bajo una
                            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"> Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a><br>
                            <a href="http://es.paperblog.com/?utm_source=VaSLibre&utm_medium=footer&utm_content=textlink" target="_blank" rel="paperblog abr4xas" title="Paperblog : Los mejores artículos de los blogs">
                                <img src="http://m1.paperblog.com/assets/images/logos/minilogo.png" border="0" alt="Paperblog" />
                            </a>
                        </p>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </footer>
        <a href="#" class="top btn-green">Top</a>
    </div>

    <script src="{{ asset('js/plugins/jquery1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js" integrity="sha256-RWiU4omUU7tQ2M3wmRQNW9UL50MB4CucbRPCbsQv+X0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js" integrity="sha256-xofl41Tt0WRg2Q0LrntvSB6qv1Mzz/ZLvSyi+O08d1g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js" integrity="sha256-NBMm26+MVgnPpBR/jdmM0orRevP7j26HoHC3IPW/T+k=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
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
                name: 'postList',
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">No encontré lo que buscas</div></div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function (data) {
                        return '<a href="/blog/'+ data.url + '" class="list-group-item">' + data.titulo +  '</a>'
                    }
                }
            });
        });
    </script>
    @stack('script')
    @if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
            @endif
        }).done();
    </script>
    {{ Session::forget(notify()->message()) }}
    @endif    
</body>
</html>