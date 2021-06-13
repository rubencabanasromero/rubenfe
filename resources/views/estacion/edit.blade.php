<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualiza los datos de las estaciones') }}
        </h2>
    </x-slot>


    <form action="{{url('estacion/'.$miestacion->id)}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        @method('PUT') {{-- se pone porque es put de metodo --}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$miestacion->nombre}}"  id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="datos">Datos</label>
            <input type="text" class="form-control" name="datos" value="{{$miestacion->datos}}"  id="datos" placeholder="datos">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>



    </form>

</x-app-layout>
