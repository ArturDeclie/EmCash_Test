<?php

namespace App\Http\Controllers;

use App\Models\Triangulo;
use App\Models\Retangulo;
use Illuminate\Http\Request;

class AreaController extends Controller{
    
    //Função para somar a area total dos triangulos e retangulos
    public function areaTotal(){
        try {
            $somaTri = Triangulo::sum('areaTri');
            $somaRet = Retangulo::sum('areaRet');
            $total = $somaRet+$somaTri;

            //Resposta da solicitação afirmativa
            return response()->json(['Area Total' => $total]);
        } catch (\Exception $e) {
            //Resposta em caso de falha
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}