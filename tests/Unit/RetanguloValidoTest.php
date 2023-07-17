<?php

use App\Http\Controllers\RetanguloController;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Retangulo;

class RetanguloValidoTest extends TestCase{

    //Testando criar um Retângulo com valores válidos
    public function testRetanguloValido(){
        $valido = new RetanguloController();

        //Definindo os valores
        $request = new Request([
            'baseRet'=>20,
            'alturaRet'=>10,
        ]);

        //Envio dos dados
        $response = $valido->store($request);

        //Verificação do status de envio
        $this->assertEquals(201, $response->getStatusCode());

        //Recuperando o último Id
        $lastId = Retangulo::latest('idretangulo')->first()->idretangulo;

        //Verificação dos dados cadastrados
        $this->assertDatabaseHas('retangulo',[
            'idretangulo' => $lastId,
            'baseRet' => 20,
            'alturaRet' => 10,
            'areaRet' => 200,
        ]);
    }
}