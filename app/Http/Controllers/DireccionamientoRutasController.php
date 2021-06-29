<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DireccionamientoRutasController extends Controller
{
    //
    public function Vista1(){
        $PorcentajeProgressBar = 0;
        $NumVentana = 1;
        $LimiteVentanas = 15;
        return view('Perderpeso')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista2(){
        $PorcentajeProgressBar = 6;
        $NumVentana = 2;
        $LimiteVentanas = 15;
        return view('SeleccionaGenero')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista3(){
        $PorcentajeProgressBar = 12;
        $NumVentana = 3;
        $LimiteVentanas = 15;
        return view('PesoDeseado')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista4(){
        $PorcentajeProgressBar = 18;
        $NumVentana = 4;
        $LimiteVentanas = 15;
        return view('ComprobarMedidas')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }

    public function Vista5(){
        $PorcentajeProgressBar = 24;
        $NumVentana = 5;
        $LimiteVentanas = 15;
        return view('DiaComun')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista6(){
        $PorcentajeProgressBar = 30;
        $NumVentana = 6;
        $LimiteVentanas = 15;
        return view('HacesEjercicio')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista7(){
        $PorcentajeProgressBar = 36;
        $NumVentana = 7;
        $LimiteVentanas = 15;
        return view('CuantoDuermes')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista8(){
        $PorcentajeProgressBar = 42;
        $NumVentana = 8;
        $LimiteVentanas = 15;
        return view('PreparacionComida')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista9(){
        $PorcentajeProgressBar = 48;
        $NumVentana = 9;
        $LimiteVentanas = 15;
        return view('Restriccion')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista10(){
        $PorcentajeProgressBar = 54;
        $NumVentana = 10;
        $LimiteVentanas = 15;
        return view('Vegetales')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista11(){
        $PorcentajeProgressBar = 60;
        $NumVentana = 11;
        $LimiteVentanas = 15;
        return view('CerealesEnDieta')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista12(){
        $PorcentajeProgressBar = 66;
        $NumVentana = 12;
        $LimiteVentanas = 15;
        return view('ProductosEnDieta')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
    public function Vista13(){
        $PorcentajeProgressBar = 72;
        $NumVentana = 13;
        $LimiteVentanas = 15;
        return view('ProductosMarinos')
        ->with('PorcentajeProgressBar', $PorcentajeProgressBar)
        ->with('NumVentana',$NumVentana)
        ->with('LimiteVentanas',$LimiteVentanas);
    }
}
