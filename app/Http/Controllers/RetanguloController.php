<?php

namespace App\Http\Controllers;

use App\Models\Retangulo;
use Illuminate\Http\Request;

// Classe controladora do Retangulo, onde os dados são recebidos e salvos no banco de dados

class RetanguloController extends Controller{
    public function store(Request $request){
        try {
            // Validação dos dados recebidos
            $request->validate([
                'baseRet' => ['required','numeric'],
                'alturaRet' => ['required','numeric'],
            ]);

            // Objeto Retangulo criado com base nos dados recebidos
            $retangulo = Retangulo::create([
                'baseRet' => $request->input('baseRet'),
                'alturaRet' => $request->input('alturaRet'),
                'areaRet' => $request->input('baseRet') * $request->input('alturaRet'),
            ]);

            //Resposta da solicitaçao afirmativa
            return response()->json($retangulo, 201);
        } catch (\Exception) {

            //Resposta em caso de falha
            return response()->json(['error' => 'Falha ao cadastrar o Triângulo: Os valores devem ser numéricos'], 422);     
        }
        
    }
}