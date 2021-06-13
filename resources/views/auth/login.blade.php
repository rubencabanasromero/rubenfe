<x-guest-layout>
<style>
    .main-head{
    height: 150px;
    background: #FFF;

    }

    .sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
    }


    .main {
    padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
    .login-form{
    margin-top: 10%;
    }

    .register-form{
    margin-top: 10%;
    }
    }

    @media screen and (min-width: 768px){
    .main{
    margin-left: 40%;
    }

    .sidenav{
    width: 40%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    }

    .login-form{
    margin-top: 80%;
    }

    .register-form{
    margin-top: 20%;
    }
    }


    .login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
    }

    .login-main-text h2{
    font-weight: 300;
    }

    .btn-black{
    background-color: #000 !important;
    color: #fff;
    }
    .redondeao{
        border-radius: 15px;
    }
</style>
    <!-- fin estilo login 1-->
    <div class="sidenav">
        <div class="login-main-text">
            <img src="https://i.imgur.com/PkcdukY.png">
            <h2>Logeate al sitio web para poder comprar los billetes a su destino preferido</h2>
        </div>
    </div>
    <div class="main vh-100 row justify-content-center align-items-center">
        <div class="  shadow-lg redondeao pt-5 pb-5 card col-md-6 col-sm-12">
            <!-- si sale mal borrar desde aqui-->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <h1 class="ml-5">LOGIN</h1>
            <hr>

            <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
                <div>
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email" required autofocus>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" >
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

{{--                    <x-button class="ml-3">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-button>--}}
                    <button type="submit" class=" ml-3 btn btn-dark" >Enviar</button>
                </div>
            </form>
            <!-- hasta aqui-->

        </div>
    </div>
    <!-- fin de intento de login 1-->
</x-guest-layout>
