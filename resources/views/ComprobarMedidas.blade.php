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
                <a href="#" class="text-right">1/15</a>
            </b>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 26.5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">26.5%</div>
        </div>
        <div class="text-left">
            <b>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                    </svg> Paso atras
                </a>
            </b>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h6 class="display-4">Comprobemos tus medidas corporales</h6>
        <p class="lead">Son las medidas que tienen nuestro cuerpo, y ayudan a que podamos guiarnos en el proceso.</p>
    </div>

    <div class="container">
        <div class="card border-left-primary shadow mb-2">
            <div class="card-body table-responsive">
                <div class="btn-group d-flex" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Imperial</button>
                    <button type="button" class="btn btn-success">Métrico</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Mis medidas: </h4>
                </div>
                <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="">Edad (Años): </label>
                            <input type="number" step="1" min="18" max="55" class="form-control" placeholder="Mi edad">
                        </div>
                        <div class="col">
                            <label for="">Estatura: </label>
                            <input type="number" step="0.01" min="100.00" max="250.00" class="form-control" placeholder="Mi estatura">
                        </div>
                        <div class="col">
                            <label for="">Peso actual: </label>
                            <input type="number" step="0.01" min="10" max="250" class="form-control" placeholder="Mi peso">
                        </div>
                    </div>
                </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-success btn-block">Continuar</button>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
</body>

</html>