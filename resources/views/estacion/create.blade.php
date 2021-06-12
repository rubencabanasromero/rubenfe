<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade una nuevo estacion') }}
        </h2>
    </x-slot>

    <form action="{{route('estacion.store')}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="datos">Datos</label>
            <input type="text" class="form-control" name="datos"  id="datos" placeholder="datos">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

</x-app-layout>
