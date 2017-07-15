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
                                <a href="#0">
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
                            @if(Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @if (Auth::user()->hasRole('Admin'))
                                    <li>
                                        <a href="#0">
                                            Administrar Usuarios
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            Administrar Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.index') }}">
                                            Manage Roles & Permissions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            Google Analytics
                                        </a>
                                    </li>
                                    @endif
                                    @if (Auth::user()->can('add_post', 'edit_post'))
                                    <li>
                                        <a href="#0">
                                            Agregar una publicación al Blog
                                        </a>
                                    </li>
                                    @endif
                                    @if (Auth::user()->can('view_profile', 'edit_profile'))
                                    <li>
                                        <a href="{{ url('profile/'.Auth::user()->nickname) }}">
                                            Mi perfil
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>                                
                            @endif
                        </ul>                       
                    </div>
                </div>
            </nav>
        </header>