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