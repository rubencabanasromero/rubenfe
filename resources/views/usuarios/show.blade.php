<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de la consulta') }}
        </h2>
    </x-slot>

        <h1>Usuario {{$miusuario->name}}</h1>
        <div class="row">
            <div class="col-8">
                <h2>Nombre:{{$miusuario->name}}</h2>
                <h3>email:{{$miusuario->email}}</h3>
                <h3>Contraseña:{{$miusuario->password}}</h3>
                <h3>Edad:{{$miusuario->edad}}</h3>
            </div>
        </div>



</x-app-layout>
