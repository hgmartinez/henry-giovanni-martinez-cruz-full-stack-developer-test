<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRegistros extends Controller
{
    //

    public function principal(){
    	return view('registro_entrada');
    }
    public function registroSalida(){
    	return view('registro_salida');
    }
    public function altaResidente(){
    	return view('alta_vehiculo_residente');
    }
    public function altaOficial(){
    	return view('alta_vehiculo_oficial');
    }
    public function pagoResidente(){
    	return view('pago_residente');
    }
}
