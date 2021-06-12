<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualiza los datos de los vagones') }}
        </h2>
    </x-slot>


    <form action="{{url('vagon/'.$vagon->id)}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        @method('PUT') {{-- se pone porque es put de metodo --}}

        <div class="form-group">
            <label for="Capacidad">Capacidad</label>
            <input type="number" class="form-control" name="Capacidad"  id="Capacidad" value="{{$vagon->Capacidad}}">
        </div>

        <div class="form-group">
            <label for="idLinea">idLinea</label>
            <select id="idLinea" name="idLinea" class="form-control">
                @foreach($linea as $lineax)
                    <option @if($vagon->idLinea==$lineax->id)selected @endif value="{{$lineax->id}}" >{{$lineax->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idEstacion">idEstacion</label>
            <select id="idEstacion" name="idEstacion" class="form-control">
                @foreach($estacion as $estacionx)
                    <option value="{{$estacionx->id}}" >{{$estacionx->nombre}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>



    </form>

</x-app-layout>
