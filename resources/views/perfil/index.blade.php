<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>
    @foreach($miperfil as $mi)
    <h3>Nombre: {{$mi->name}}</h3><br>
    <h3>Email: {{$mi->email}}</h3><br>
    <h3>Contraseña:{{$mi->password}}</h3><br>
    <h3>Edad:{{$mi->edad}}</h3><br>
        <a href="{{url('perfil/'.$mi->id.'/edit')}}" class="btn btn-warning">Editar</a>
    @endforeach


</x-app-layout>
