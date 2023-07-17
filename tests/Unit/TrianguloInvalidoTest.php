<?php

use App\Http\Controllers\TrianguloController;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Triangulo;

class TrianguloInvalidoTest extends TestCase{

    //Testando criar um Triângulo com valores inválidos
    public function testTrianguloInvalido(){
        $invalido = new TrianguloController();

        //Definindo os valores
        $request = new Request([
            'baseTri'=>'rhd',
            'alturaTri'=>80,
        ]);

        //Envio dos dados
        $response = $invalido->store($request);

        //Verificação do status de envio
        $this->assertEquals(422, $response->getStatusCode());

        //Recuperando o último Id
        $lastId = Triangulo::latest('idtriangulo')->first()->idtriangulo;

        //Verificação se os dados não foram cadastrados
        $this->assertDatabaseMissing('triangulo', [
            'idtriangulo' => $lastId,
            'baseTri' => 'rhd',
            'alturaTri' => 80,
        ]);
    }
}