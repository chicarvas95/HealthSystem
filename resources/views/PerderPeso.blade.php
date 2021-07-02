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
                {{ route('direccion.index') }}
                <a href="#" class="text-right">{{$NumVentana}}/{{$LimiteVentanas}}</a>
            </b>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$PorcentajeProgressBar}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$PorcentajeProgressBar}}%</div>
        </div>
        <div class="text-left">
            <b>
            </b>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h6 class="display-4">¿Quieres perder peso? {{ route('direccion.index') }}</h6>
        <p class="lead">Recuerda: perder o ganar peso no es lo mas importante, sino conseguir una vida mucho más saludable.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Sí, deseo perder peso</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-camera"></i>
                    <a href="/seleccionar-genero" class="btn btn-lg btn-block btn-outline-primary"> Seleccionar</a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">No, deseo ganar peso o conservarlo</h4>
                </div>
                <div class="card-body">
                    <a href="/seleccionar-genero" class="btn btn-lg btn-block btn-outline-success"> Seleccionar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 ">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Al continuar acepto los <a href="#">terminos y condiciones</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                            <label class="form-check-label" for="defaultCheck1">
                                Me gustaria recibir actualizaciones y ofertas sobre los servicios
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>

</html>