<?php

use App\Http\Controllers\TrianguloController;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Triangulo;

class TrianguloValidoTest extends TestCase{

    //Testando criar um Triângulo com valores válidos
    public function testTrianguloValido(){
        $valido = new TrianguloController();

        //Definindo os valores
        $request = new Request([
            'baseTri'=>10,
            'alturaTri'=>10,
        ]);

        //Envio dos dados
        $response = $valido->store($request);

        //Verificação do status de envio
        $this->assertEquals(201, $response->getStatusCode());

        //Recuperando o último Id
        $lastId = Triangulo::latest('idtriangulo')->first()->idtriangulo;

        //Verificação dos dados cadastrados
        $this->assertDatabaseHas('triangulo',[
            'idtriangulo' => $lastId,
            'baseTri' => 10,
            'alturaTri' => 10,
            'areaTri' => 50,
        ]);
    }
}