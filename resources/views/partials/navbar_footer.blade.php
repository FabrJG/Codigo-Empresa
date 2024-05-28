<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CACFD2">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item {{ Request::is('/') && ! Request::is('/')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('servicios') && ! Request::is('servicios/proyectos')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/servicios')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('proyectos') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/proyectos')}}">
                            Proyectos
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('clientes') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/clientes')}}">
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('blog') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/blog')}}">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('contacto') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/contacto')}}">
                            Contacto
                        </a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/auth/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul> -->
            </div>
        @endif
    </div>
</nav>