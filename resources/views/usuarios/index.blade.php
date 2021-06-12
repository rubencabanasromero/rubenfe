<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <style>

        body{
            background-color: #e8e6e6;
        }
        .tablaB{
            margin-top: 75px;
            width: 75%;
            margin-left: 200px;
            background-color: #323232;
            box-shadow: 2px 2px 10px #666;
        }

        .colored{
            color: #ff1e56;
        }
        .imagg{
            background-color: #13f07e;
            border-radius:50%;
            border-style: solid;
            border-width: 2px;
        }
    </style>
        <table class="tablaB table table-dark">
            <thead>
            <tr class="colored">
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">edad</th>
            </tr>
            </thead>
            <tbody>
            @foreach($miusuario as $miusu)
                <tr>
                    <th scope="row">{{$miusu->id}}</th>
                    <td scope="row">{{$miusu->name}}</td>
                    <td scope="row">{{$miusu->email}}</td>
                    <td scope="row">{{$miusu->edad}}</td>

                    <td><a href="{{url('usuarios/'.$miusu->id)}}" class="btn btn-primary">Detalle</a> </td> {{--Se ponen asi los botones porque son por el metodo get, en cambio para el de borrar no podria ser asi porque es con el metodo DELETE --}}
                    <td><a href="{{url('usuarios/'.$miusu->id.'/edit')}}" class="btn btn-warning">Editar</a> </td> {{-- GET|HEAD  | car/{car}/edit                  | car.edit            | App\Http\Controllers\CarController@edit La ruta url se pone asi porque en route:list sale asi y el {car se refiere al id del cocche} --}}


                    <td>
                        <form action="{{url('usuarios/'.$miusu->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="borrar">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

          <!--  <a href="{{url('usuarios/create')}}" class="d-flex justify-content-center"><img width="40px" src="https://i.imgur.com/S3Rp49V.png"></a>-->
    <a href="{{url('usuarios/create')}}" class="d-flex justify-content-center"><img class="imagg" width="30px" src="https://i.imgur.com/3sQqbNz.png"></a>
</x-app-layout>
