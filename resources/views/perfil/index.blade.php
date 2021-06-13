<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <table class="tablaB table table-dark">
        <thead>
        <tr class="colored">
            <th scope="col">nombre</th>
            <th scope="col">email</th>
            <th scope="col">edad</th>
        </tr>
        </thead>
        <tbody>
        @foreach($miperfil as $mi)
            <tr>
                <th scope="row">{{$mi->name}}</th>
                <th scope="row">{{$mi->email}}</th>
                <th scope="row">{{$mi->edad}}</th>
                <th scope="row"> <a href="{{url('perfil/'.$mi->id.'/edit')}}" class="btn btn-warning">Editar</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
