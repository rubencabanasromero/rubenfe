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

                <h1 class="ml-5">Verificacion Mail</h1>
                <hr><br>

                Gracias por haberse registrado en rubenfe, solo queda que verifique su correo<br><br>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('Ya se ha enviado un mail para que verifique su correo') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button class="btn-black">
                            {{ __('Reenviar el correo de verificacion') }}
                        </x-button>
                    </div>
                </form><br><br>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log out') }}
                    </button>
                </form>
                <!-- hasta aqui-->

            </div>
        </div>
        <!-- fin de intento de login 1-->

</x-guest-layout>
