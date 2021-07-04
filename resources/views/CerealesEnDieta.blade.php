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


        <div class="text-left">

        </div>
        <div class="text-right">
            <b><a href="#" class="text-right">{{$NumVentana}}/{{$LimiteVentanas}}</a></b>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:{{$PorcentajeProgressBar}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{$PorcentajeProgressBar}}%</div>
        </div>
        <div class="text-left">
            <b><a href="/agregar-vegetales"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
              </svg> Paso anterior</a></b>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h6 class="display-4">Marca los cereales que deseas incorporar en tu dieta:</h6>
    </div>

    <div class="container">
        <div class="card-deck mb-3 ">
            <div class="card">
                <div class="card-header text-center">
                    Selecciona una opción
                </div>
                <div class="card-body">
                    <form method="post" action="agregar-productos">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" name="AZ" type="checkbox" value="Arroz" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Arroz
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="QN" type="checkbox" value="Quinoa" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Quinoa
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" name="CS" type="checkbox" value="Cuscus" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Cuscus
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="AT" type="checkbox" value="Alforfon o trigo sarraceno" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Alforfon o trigo sarraceno
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="AM" type="checkbox" value="Amaranto" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Amaranto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="HM" type="checkbox" value="harina de maiz" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Harina de maiz
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="MG" type="checkbox" value="Mijo en grano" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Mijo en grano
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="BG" type="checkbox" value="Bulgur" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Bulgur
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" name="SM" type="checkbox" value="Sermola" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Sermola
                            </label>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-outline-success btn-block" value="Continuar" />
                </div>
            </form>
            </div>
        </div>

    </div>
    @include('shared.footer')
</body>

</html>