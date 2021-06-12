<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade una nueva linea') }}
        </h2>
    </x-slot>

    <form action="{{route('linea.store')}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre"  id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="idOrigen">idOrigen</label>
            <input type="text" class="form-control" name="idOrigen" id="idOrigen" placeholder="idOrigen">
        </div>

        <div class="form-group">
            <label for="idDestino">idDestino</label>
            <input type="text" class="form-control" name="idDestino"  id="idDestino" placeholder="idDestino">
        </div>

        <div class="form-group">
            <label for="HoraSalida">Hora de Salida</label>
            <input type="datetime-local" class="form-control" name="HoraSalida" id="HoraSalida" placeholder="HoraSalida">
        </div>

        <div class="form-group">
            <label for="Horallegada">Hora de llegada</label>
            <input type="datetime-local" class="form-control" name="Horallegada" id="Horallegada" placeholder="Horallegada" min="2021-03-06T00:00">
        </div>

        <div class="form-group">
            <label for="idEstacion">idEstacion</label>
            <select id="idEstacion" name="idEstacion" class="form-control">
                @foreach($estacion as $estacionx)
                    <option value="{{$estacionx->id}}" >{{$estacionx->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

</x-app-layout>
