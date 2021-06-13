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

            body{
                background-color: #e8e6e6;
            }
            .card{
                width: 75%;
                box-shadow: 2px 2px 5px #666;
                background-color: #323232;
            }

            .roundimg{
                border-radius:50%;
                background-color: whitesmoke;
                margin-left: auto;
                margin-right: auto;
                box-shadow: 2px 2px 5px #666;

            }
            .ha2{
                color: white;
            }
            .espaciado1{
                margin-top: 100px;
            }
            .espaciado2{
                margin-top: 50px;
            }
            .esplef{
                margin-left: 100px;
                margin-right: 100px;
            }
            h4{
                font-weight: bolder;
            }
            h1{
                font-weight: bolder;
            }

        </style>
    </head>
    <body class="antialiased">

    @include('layouts.navigation')

    <!-- div primero-->
        <div class="d-flex justify-content-center">
            <div class=" mt-5 card">
                <div class=" mt-5  row mb-5">
                    <div class="col-4 d-flex justify-content-center"><a  class="d-flex justify-content-center" href="{{ url('/linea') }}"><img class="roundimg img-fluid" width="50%" src="https://i.imgur.com/NFWkjp4.png"/></a></div>
                    <div class="col-4 d-flex justify-content-center"><a  class="d-flex justify-content-center" href="{{ url('/estacion') }}"> <img class="roundimg img-fluid" width="60%" src="https://i.imgur.com/o1sY2a4.png"/></a></div>
                    <div class="col-4 d-flex justify-content-center"><a  class="d-flex justify-content-center" href="{{ url('/ofertas') }}"> <img class="roundimg img-fluid"  src="https://i.imgur.com/iRXePTP.png"/></a></div>
                </div>
                <div class="mt-1 row mb-5">
                    <div class="col-4 d-flex justify-content-center ha2"><h2>Lineas</h2></div>  <!-- https://i.imgur.com/iRXePTP.png -->
                    <div class="col-4 d-flex justify-content-center ha2"><h2>Estaciones</h2></div>
                    <div class="col-4 d-flex justify-content-center ha2"><h2>Ofertas</h2></div>
                </div>
            </div>
        </div>
    <!-- final div primero-->

    <div class="esplef mt-5">

        <div class="d-flex justify-content-center espaciado1 row"><h1>¿POR QUÉ ELEGIR RUBENFE?</h1></div>

        <div class="espaciado2 row">
            <div class="col-4 d-flex justify-content-center mt-6"><h4>Seguridad Asegurada</h4></div>
            <div class="col-4 d-flex justify-content-center mt-6"><h4>Mejor Precio Del Mercado</h4></div>
            <div class="col-4 d-flex justify-content-center mt-6"><h4>Rapidez Y Maximo Confort</h4></div>
        </div>
        <div class="espaciado2 row">
            <div class="col-4 d-flex justify-content-center mt-6 border-right border-dark"><h6>Trenes totalmente desinfectados y aprobados por sanidad que revisó todos los trenes con anterioridad.</h6></div>
            <div class="col-4 d-flex justify-content-center mt-6 border-right border-dark"><h6>Aqui en nuestra web podra disfrutar de precios muy asequibles y sin comisiones ni gastos de gestión</h6></div>
            <div class="col-4 d-flex justify-content-center mt-6"><h6>Gracias a nuestros trenes de ultimo modelo, estos ofrecen tanto un rendimiento en cuanto a velocidad excelente, como a una gran comodidad en los asientos y en los servicios que ofrecemos en dichos trenes</h6></div>
        </div>
    </div>

    <div class="row d-flex mt-5 justify-content-center"><h1 class="mt-5">SOBRE NOSOTROS</h1></div><br>
    <div class="esplef mt-5 d-flex justify-content-center">

        <div class="row espaciado2 mt-2">
            <div class="col-6 d-flex justify-content-center  border-right border-dark">
            Rubenfe es una empresa centrada en las experiencas y en los viajes de nuestros usuarios. Rubenfe es una empresa que se creo gracias a la idea de poder hacer los viajes mas asequibles y disfrutables de todos
                metodos de viaje, al final siendo esta, una realidad. <br><br>La sede de nuestra empresa puede encontrarla en la calle Inventada Nº 123.<br><br>Nuestro telefono de contacto es el 111111111.
            </div>
            <div class="col-6 d-flex justify-content-center">

                <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.10000112642!2d-4.479771884443824!3d37.41111117982732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d77336192ab19%3A0x13417153fad2ce31!2sIES%20Marqu%C3%A9s%20de%20Comares!5e0!3m2!1ses!2ses!4v1623592259806!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    </body>
</html>
