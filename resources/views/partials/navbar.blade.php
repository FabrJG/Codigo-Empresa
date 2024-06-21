<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CACFD2">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#555"><span style="font-size:18pt">&#x272f</span> Empresa</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"  style="width:100%">
                    <li class="nav-item {{ Request::is('/') && ! Request::is('/')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/')}}">
                            Inicio <span>&#x2302</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('personas') && ! Request::is('personas')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/personas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Personas
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('personas') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/personas')}}">
                            Empresa
                        </a>
                    </li>   
                    <li class="nav-item {{  Request::is('contacto') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/contacto')}}">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
