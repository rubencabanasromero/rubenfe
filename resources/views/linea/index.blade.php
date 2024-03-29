<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        .marcup{
            background: #323232;
            width:200px;
            margin-left: 200px;
            margin-top: 7%;
            margin-bottom: 25px ;
            box-shadow: 2px 2px 10px #666;
            color:white;
            font-weight: bolder;
        }
        .textmarcgroup{
            margin-left: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .busqdiv{
            background: #323232;
            margin-left: 200px;
            width: 75%;
            padding-top: 30px;
            padding-bottom: 30px;
            margin-top: -25px;
            box-shadow: 2px 2px 10px #666;
            color:white;
            font-weight: bolder;
            /*  border-style: solid;
              border-color: red;
              border-width: 5px;*/
        }
        .inform{
            border-radius: 5px;
            box-shadow: 2px 2px 5px #666;
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

        body{
            background-color: #e8e6e6;
        }
        .imagg{
            background-color: #13f07e;
            border-radius:50%;
            border-style: solid;
            border-width: 2px;
        }
    </style>
</head>
<body class="antialiased">

@include('layouts.navigation')

<div class="marcup">
    <p class="textmarcgroup">Busqueda de Líneas</p>
</div>
<div class="card busqdiv">
    <form>
        <label class="ml-5" for="desde">Desde:</label> <input class="ml-2 inform" type="text" name="desde" id="desde" placeholder="ej. Churriana de las fronteras">
        <label class="ml-5" for="hasta">Hasta:</label> <input class="ml-2 inform" type="text" name="hasta" id="hasta" placeholder="ej. Moriles">
        <button class="mr-5 float-right btn btn-danger" type="submit">Buscar Línea</button>
    </form>
</div>



<table class="tablaB table table-dark">
    <thead>
    <tr class="colored">
        <th scope="col">id linea</th>
        <th scope="col">Origen</th>
        <th scope="col">Hora de Salida</th>
        <th scope="col">Destino</th>
        <th scope="col">Hora de Llegada</th>
        <th scope="col">Precio</th>
    </tr>
    </thead>
    <tbody>
    @foreach($linea as $lineamo)
        <tr>
            <th scope="row">{{$lineamo->id}}</th>
            <th scope="row">{{$lineamo->idOrigen}}</th>
            <td scope="row">{{$lineamo->HoraSalida}}</td>
            <td scope="row">{{$lineamo->idDestino}}</td>
            <td scope="row">{{$lineamo->Horallegada}}</td>
            @foreach($precio as $preciox)
            <form action="{{url('billete/'.$preciox->id)}}" method="POST" enctype="multipart/form-data">
            <td scope="row"> <select>

                        @if($preciox->idLinea===$lineamo->id)
                            <option>{{$preciox->precio}}</option>@endif

                </select>
                </td>
                <td><button type="submit" class="btn btn-primary">Comprar</button></td>
            </form>
            @endforeach
            @if(@Auth::user()!=null)
                @if(@Auth::user()->hasRole('admin'))
            <th><a href="{{url('linea/'.$lineamo->id.'/edit')}}" class="btn btn-warning">Editar</a> </th>
            <th>
                <form action="{{url('linea/'.$lineamo->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" name="borrar">Borrar</button>
                </form>
            </th>
                @endif
                @endif
        </tr>
    @endforeach
    </tbody>
</table>
@if(@Auth::user()!=null)
    @if(@Auth::user()->hasRole('admin'))
        <a href="{{url('linea/create')}}" class="d-flex justify-content-center"><img class="imagg" width="30px" src="https://i.imgur.com/3sQqbNz.png"></a>
    @endif
    @endif
</body>
</html>
