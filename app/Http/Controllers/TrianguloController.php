<?php

namespace App\Http\Controllers;

use App\Models\Triangulo;
use Illuminate\Http\Request;

// Classe controladora do Triangulo, onde os dados são recebidos e salvos no banco de dados

class TrianguloController extends Controller{
    public function store(Request $request){
        try {
            // Validação dos dados recebidos
            $request->validate([
                'baseTri' => ['required','numeric'],
                'alturaTri' => ['required','numeric'],
            ]);

            // Objeto Triangulo criado com base nos dados recebidos
            $triangulo = Triangulo::create([
                'baseTri' => $request->input('baseTri'),
                'alturaTri' => $request->input('alturaTri'),
                'areaTri' => $request->input('baseTri') * $request->input('alturaTri') * 0.5,
            ]);

            //Resposta da solicitação afirmativa
            return response()->json($triangulo, 201);
        } catch (\Exception) {
            
            //Resposta em caso de falha
            return response()->json(['error' => 'Falha ao cadastrar o Triângulo: Os valores devem ser numéricos'], 422);    
        }
       
    }
}
