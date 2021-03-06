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
                    <li {{ ($current == 'archivos' ? 'class=active' : '') }} >
                        <a href="{{ route('archivos') }}">
                            Archivos
                        </a>
                    </li>
                    <li {{ ($current == 'notas' ? 'class=active' : '') }}>
                        <a href="{{ route('notas') }}">
                            Publicaciones
                        </a>
                    </li>
                    @if(Auth::check())
                    @if (Auth::user()->hasRole('Admin'))
                    @include('front.partials.googleanalytics-menu')
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Opciones
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->hasRole('Admin'))
                            <li>
                                <a href="{{ route('users.index') }}">
                                    Administrar Usuarios
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/post') }}">
                                    Administrar Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('banner.index') }}">
                                    Administrar Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blogroll.index') }}">
                                    Administrar Blogroll
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}">
                                    Manage Roles & Permissions
                                </a>
                            </li>
                            @endif
                            @if (Auth::user()->can('add_post', 'edit_post'))
                            <li>
                                <a href="{{ route('post.create') }}">
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