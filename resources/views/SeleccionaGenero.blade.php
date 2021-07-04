<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealthSystem</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/main.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    @include('shared.navbar')
    <div class="container">
        <div class="text-left"></div>
        <div class="text-right">
            <b>
                <a href="#" class="text-right">{{$NumVentana}}/{{$LimiteVentanas}}</a>
            </b>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:" {{$PorcentajeProgressBar}}%; " aria-valuenow="25 " aria-valuemin="0 " aria-valuemax="100 ">{{$PorcentajeProgressBar}}%</div>
        </div>
        <div class="text-left ">
            <b>
                <a href="/ ">
                    <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-caret-left-fill " viewBox="0 0 16 16 ">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z " />
                    </svg> Paso atras
                </a>
            </b>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center ">
        <h6 class="display-4 ">Selecciona tu género</h6>
        <p class="lead ">Las mujeres necesitan más calcio; los hombres más proteína.</p>
    </div>

    <div class="container ">
        <div class="card-deck mb-3 text-center ">
            <div class="card mb-4 box-shadow ">
                <div class="card-header ">
                    <h4 class="my-0 font-weight-normal ">Soy hombre</h4>
                </div>
                <div class="card-body ">
                    <i class="fas fa-camera "></i>
                    <form method="post" action="peso-deseado">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="GRO" value="SG9tYnJl=">
                        <input class="btn btn-lg btn-block btn-outline-primary" type="submit" value="Seleccionar">
                    </form>
                </div>
            </div>
            <div class="card mb-4 box-shadow ">
                <div class="card-header ">
                    <h4 class="my-0 font-weight-normal ">Soy mujer</h4>
                </div>
                <div class="card-body ">
                    <form method="post" action="peso-deseado">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="GRO" value="TXVqZXI=">
                        <input class="btn btn-lg btn-block btn-outline-primary" type="submit" value="Seleccionar">
                    </form>
                    <!-- <a href="/peso-deseado " class="btn btn-lg btn-block btn-outline-success ">Selecciona</a> -->
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>

</html>