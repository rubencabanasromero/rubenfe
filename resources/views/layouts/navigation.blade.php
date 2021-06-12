<style>

    .color1{
        color:white;
    }

    .dereya{
        float:right;

    }
    a hover{
        text-decoration: none;
        color: red;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img  width="100px" src="https://i.imgur.com/PkcdukY.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="ml-5 nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="ml-5 nav-item active">
                <a class="nav-link" href="{{ url('/linea') }}">Lineas <span class="sr-only">(current)</span></a>
            </li>

            <li class="ml-5 nav-item active">
                <a class="nav-link" href="{{ url('/estacion') }}">Estaciones</a>
            </li>

            @if(@Auth::user()!=null)
                @if(@Auth::user()->hasRole('admin'))
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{route('vagon.index')}}">Vagones <span class="sr-only">(current)</span></a>
                    </li>
                @endif
            @endif

            @if(@Auth::user()!=null)
                @if(@Auth::user()->hasRole('admin'))
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="{{route('billete.index')}}">Billetes <span class="sr-only">(current)</span></a>
                    </li>
                @endif
            @endif


            @if(@Auth::user()!=null)
            @if(@Auth::user()->hasRole('admin'))
            <li class="nav-item ml-5">
                <a class="nav-link" href="{{route('usuarios.index')}}">Usuarios <span class="sr-only">(current)</span></a>
            </li>
            @endif
            @endif
        </ul>
            @if(@Auth::user()!=null)
            <ul class="nav-item dereya dropdown">
                <a class=" nav-link color1 dropdown-toggle mr-sm-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name}}
                </a>
                <div class="dropdown-menu  bg-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item color1" href="{{route('perfil.index')}}">Mi Perfil</a>
                    <div class="dropdown-divider bg-black"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item color1" href="route('logout')"
                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log out') }}
                        </a>
                    </form>
                </div>
            </ul>
                @endif

        @if (Route::has('login'))
            <ul class=" navbar-nav dereya">
                @auth
                @else
                   <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                @if (Route::has('register'))
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endif
                @endauth
            </ul>
        @endif
    </div>
</nav>

