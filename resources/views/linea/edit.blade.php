<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualiza los datos de las lineas') }}
        </h2>
    </x-slot>


    <form action="{{url('linea/'.$milinea->id)}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        @method('PUT') {{-- se pone porque es put de metodo --}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$milinea->nombre}}"  id="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="idOrigen">idOrigen</label>
            <input type="text" class="form-control" name="idOrigen" value="{{$milinea->idOrigen}}"  id="idOrigen" placeholder="idOrigen">
        </div>

        <div class="form-group">
            <label for="idDestino">idDestino</label>
            <input type="text" class="form-control" name="idDestino" value="{{$milinea->idDestino}}"  id="idDestino" placeholder="idDestino">
        </div>

        <div class="form-group">
            <label for="HoraSalida">Hora de Salida</label>
            <input type="datetime-local" class="form-control" name="HoraSalida" value="{{$milinea->HoraSalida}}"  id="HoraSalida" placeholder="HoraSalida">
        </div>

        <div class="form-group">
            <label for="Horallegada">Hora de llegada</label>
            <input type="datetime-local" class="form-control" name="Horallegada" value="{{$milinea->Horallegada}}"  id="Horallegada" placeholder="Horallegada" min="2021-03-06T00:00">
        </div>


        <div class="form-group">
            <label for="idEstacion">idEstacion</label>
            <!--<input type="number" class="form-control" name="idEstacion" value="{{$milinea->idEstacion}}"  id="idEstacion" placeholder="idEstacion">-->
            <select id="idEstacion" name="idEstacion" class="form-control">
                @foreach($estacion as $estacionx)
                <option @if($milinea->idEstacion==$estacionx->id)selected @endif value="{{$estacionx->id}}" >{{$estacionx->nombre}}</option>
                @endforeach
            </select>
        </div>
       <!-- <input type="datetime-local" id="meeting-time"
               name="meeting-time" value="2018-06-12T19:30"
               min="2018-06-07T00:00" max="2018-06-14T00:00">-->

        <button type="submit" class="btn btn-primary">Actualizar</button>



    </form>

</x-app-layout>
