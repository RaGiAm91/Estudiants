<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Estudiants</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('student') && ! Request::is('student')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/student')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('student/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/student/create')}}">
                            <span>&#10010</span> Añadir estudiante
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>