<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DireccionamientoRutasController extends Controller
{
    //
    public function Vista1(Request $request){
        
        $data = $request->session()->all();
        var_dump($data);

        session()->forget('Respuestas');
        $PorcentajeProgressBar = 0;
        $NumVentana = 1;
        $LimiteVentanas = 15;
        return view('PerderPeso')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista2(Request $request)
    {
        //Almacenamos en la variable Genero el valor encriptado del genero
        $PerderPeso = $request->get('PP');
        
        //Valor del genero asignada a una variable de sesion
        session_start();
        session()->put('Respuestas.PerderPeso',array($PerderPeso));
        $data = $request->session()->all();
        var_dump($data);
        
        $PorcentajeProgressBar = 6;
        $NumVentana = 2;
        $LimiteVentanas = 15;
        return view('SeleccionaGenero')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas)->render();
    }

    public function Vista3(Request $request)
    {
        $Genero = $request->get('GRO');
        session()->put('Respuestas.Genero',$Genero);
        $data = $request->session()->all();
        var_dump($data);
        
        $PorcentajeProgressBar = 12;
        $NumVentana = 3;
        $LimiteVentanas = 15;
        return view('PesoDeseado')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista4(Request $request){

        $PesoDeseado = $request->get('PS');

        //Valor del genero asignada a una variable de sesion
        session()->put('Respuestas.PesoDeseado',$PesoDeseado);
        $data = $request->session()->all();
        var_dump($data);
        $PorcentajeProgressBar = 18;
        $NumVentana = 4;
        $LimiteVentanas = 15;
        return view('ComprobarMedidas')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista5(Request $request)
    {
        $Edad = $request->get('Edad');
        $Estatura = $request->get('Estatura');
        $PesoActual = $request->get('PesoActual');
        session()->put('Respuestas.Edad',$Edad);
        session()->put('Respuestas.Estatura',$Estatura);
        session()->put('Respuestas.PesoActual',$PesoActual);
        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 24;
        $NumVentana = 5;
        $LimiteVentanas = 15;
        return view('DiaComun')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista6(Request $request){

        $MCA = $request->get('MCA');
        $SGV = $request->get('SGV');
        $CYI = $request->get('CYI');
        $TSY = $request->get('TSY');
    
        session()->put('Respuestas.MayorMenteCasa',$MCA);
        session()->put('Respuestas.Oficina',$SGV);
        session()->put('Respuestas.CaminatasDiarias',$CYI);
        session()->put('Respuestas.TrabajoFisico',$TSY);
        
        $data = $request->session()->all();
        var_dump($data);
        
        $PorcentajeProgressBar = 30;
        $NumVentana = 6;
        $LimiteVentanas = 15;
        return view('HacesEjercicio')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista7(Request $request){

        $PracticamenteNada = $request->input('PN');
        $SoloCamino = $request->input('SC');
        $UnaDosVecesSemana = $request->input('VS2');
        $UnaTresVecesSemana = $request->input('VS3');
        $CincoSieteVecesSemana = $request->input('VS5');

        session()->put('Respuestas.PracticamenteNada',$PracticamenteNada);
        session()->put('Respuestas.SoloCamino',$SoloCamino);
        session()->put('Respuestas.UnaDosVecesSemana',$UnaDosVecesSemana);
        session()->put('Respuestas.UnaTresVecesSemana',$UnaTresVecesSemana);
        session()->put('Respuestas.CincoSieteVecesSemana',$CincoSieteVecesSemana);

        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 36;
        $NumVentana = 7;
        $LimiteVentanas = 15;
        return view('CuantoDuermes')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista8(Request $request){
        
        $MenosCincoHoras = $request->get('MCH');
        $EntreCincoSeisHoras = $request->get('ECSH');
        $EntreSieteOchoHoras = $request->get('ESOH');
        $MasOchoHoras = $request->get('MOH');
        
        session()->put('Respuestas.MenosCincoHoras',$MenosCincoHoras);
        session()->put('Respuestas.EntreCincoSeisHoras',$EntreCincoSeisHoras);
        session()->put('Respuestas.EntreSieteOchoHoras',$EntreSieteOchoHoras);
        session()->put('Respuestas.MasOchoHoras',$MasOchoHoras);

        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 42;
        $NumVentana = 8;
        $LimiteVentanas = 15;
        return view('PreparacionComida')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista9(Request $request){

        $Menos30Minutos = $request->get('MTM');
        $Entre30y60Minutos = $request->get('ETSM');
        $MasDeUnaHora = $request->get('MDH');
        session()->put('Respuestas.Menos30Minutos',$Menos30Minutos);
        session()->put('Respuestas.Entre30y60Minutos',$Entre30y60Minutos);
        session()->put('Respuestas.MasDeUnaHora',$MasDeUnaHora);
        
        $data = $request->session()->all();
        var_dump($data);
        
        $PorcentajeProgressBar = 48;
        $NumVentana = 9;
        $LimiteVentanas = 15;
        return view('Restriccion')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista10(Request $request){
        $IntoleranteLactosa = $request->get('IL');
        $SoyCeliaco = $request->get('SC');
        $SoyVegetariano = $request->get('SV');
        $SoyVegano = $request->get('SVNO');

        session()->put('Respuestas.IntoleranteLactosa',$IntoleranteLactosa);
        session()->put('Respuestas.SoyCeliaco',$SoyCeliaco);
        session()->put('Respuestas.SoyVegetariano',$SoyVegetariano);
        session()->put('Respuestas.SoyVegano',$SoyVegano);
        
        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 54;
        $NumVentana = 10;
        $LimiteVentanas = 15;
        return view('Vegetales')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista11(Request $request){

        $Brocoli = $request->get('BR');
        $Coliflor = $request->get('CL');
        $Pimiento = $request->get('PT');
        $Berenjena = $request->get('BNA');
        $Repollo = $request->get('RP');
        $Esparragos = $request->get('EP');
        $Espinacas = $request->get('ESP');
        $Cebolla = $request->get('Clla');
        $Tomate = $request->get('TTE');
        $Pepino = $request->get('PNO');
        
        session()->put('Respuestas.Brocoli',$Brocoli);
        session()->put('Respuestas.Coliflor',$Coliflor);
        session()->put('Respuestas.Pimiento',$Pimiento);
        session()->put('Respuestas.Berenjena',$Berenjena);
        session()->put('Respuestas.Repollo',$Repollo);
        session()->put('Respuestas.Esparragos',$Esparragos);
        session()->put('Respuestas.Espinacas',$Espinacas);
        session()->put('Respuestas.Cebolla',$Cebolla);
        session()->put('Respuestas.Tomate',$Tomate);
        session()->put('Respuestas.Pepino',$Pepino);
        
        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 60;
        $NumVentana = 11;
        $LimiteVentanas = 15;
        return view('CerealesEnDieta')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista12(Request $request){
        
        $Arroz = $request->get('AZ');
        $Quinoa = $request->get('QN');
        $Cuscus = $request->get('CS');
        $trigo = $request->get('AT');
        $Amaranto = $request->get('AM');
        $HarinaMaiz = $request->get('HM');
        $MijoEnGrano = $request->get('MG');
        $Bulgur = $request->get('BG');
        $Sermola = $request->get('SM');

        session()->put('Respuestas.Arroz',$Arroz);
        session()->put('Respuestas.Quinoa',$Quinoa);
        session()->put('Respuestas.Cuscus',$Cuscus);
        session()->put('Respuestas.trigo',$trigo);
        session()->put('Respuestas.Amaranto',$Amaranto);
        session()->put('Respuestas.HarinaMaiz',$HarinaMaiz);
        session()->put('Respuestas.MijoEnGrano',$MijoEnGrano);
        session()->put('Respuestas.Bulgur',$Bulgur);
        session()->put('Respuestas.Sermola',$Sermola);

        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 66;
        $NumVentana = 12;
        $LimiteVentanas = 15;
        return view('ProductosEnDieta')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista13(Request $request){
        
        $Aguacate = $request->get('AT');
        $Frijoles = $request->get('FJ');
        $Setas = $request->get('ST');
        $Huevos = $request->get('HV');
        $Leche = $request->get('LC');
        $Requeson = $request->get('RQ');
        $Tofu = $request->get('TF');
        $Hummus = $request->get('HM');
        $LecheVegetal = $request->get('LV');
        
        session()->put('Respuestas.Aguacate',$Aguacate);
        session()->put('Respuestas.Frijoles',$Frijoles);
        session()->put('Respuestas.Setas',$Setas);
        session()->put('Respuestas.Huevos',$Huevos);
        session()->put('Respuestas.Leche',$Leche);
        session()->put('Respuestas.Requeson',$Requeson);
        session()->put('Respuestas.Tofu',$Tofu);
        session()->put('Respuestas.Hummus',$Hummus);
        session()->put('Respuestas.LecheVegetal',$LecheVegetal);
        
        $data = $request->session()->all();
        var_dump($data);

        $PorcentajeProgressBar = 72;
        $NumVentana = 13;
        $LimiteVentanas = 15;
        return view('ProductosMarinos')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista14(Request $request)
    {
        $Pavo = $request->get('PV');
        $Res = $request->get('RS');
        $Pollo = $request->get('PL');
        $Cerdo = $request->get('CD');
        $Pescado = $request->get('PCD');
        $Mariscos = $request->get('MCS');
        $NingunaAnterior = $request->get('NA');

        session()->put('Respuestas.Pavo',$Pavo);
        session()->put('Respuestas.Res',$Res);
        session()->put('Respuestas.Pollo',$Pollo);
        session()->put('Respuestas.Cerdo',$Cerdo);
        session()->put('Respuestas.Pescado',$Pescado);
        session()->put('Respuestas.Mariscos',$Mariscos);
        session()->put('Respuestas.NingunaAnterior',$NingunaAnterior);
        
        $data = $request->session()->all();
        var_dump($data);
        return view('FinEncuesta');
    }
}
