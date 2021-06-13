<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade una nuevo billete') }}
        </h2>
    </x-slot>

    <form action="{{route('billete.store')}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Esto hay que ponerlo en todos los formularios que no sean por GET --}}
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" name="precio"  id="precio" placeholder="Precio">
        </div>

        <div class="form-group">
            <label for="idLinea">idLinea</label>
            <select id="idLinea" name="idLinea" class="form-control">
                @foreach($linea as $lineax)
                    <option value="{{$lineax->id}}" >{{$lineax->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idEstacion">idEstacion</label>
            <select id="idEstacion" name="idEstacion" class="form-control" readonly>
                @foreach($estacion as $estacionx)
                    <option value="{{$estacionx->id}}" >{{$estacionx->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idVagon">idVagon</label>
            <select id="idVagon" name="idVagon" class="form-control" readonly>
                @foreach($vagon as $vagonx)
                    <option>{{$vagonx->id}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

</x-app-layout>
