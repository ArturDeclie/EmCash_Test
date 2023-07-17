<?php

use App\Http\Controllers\RetanguloController;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Retangulo;

class RetanguloInvalidoTest extends TestCase{

    //Testando criar um Retângulo com valores inválidos
    public function testRetanguloInvalido(){
        $valido = new RetanguloController();

        //Definindo os valores
        $request = new Request([
            'baseRet'=>'wwe',
            'alturaRet'=>35,
        ]);

        //Envio dos dados
        $response = $valido->store($request);

        //Verificação do status de envio
        $this->assertEquals(422, $response->getStatusCode());

        //Recuperando o último Id
        $lastId = Retangulo::latest('idretangulo')->first()->idretangulo;

        //Verificação se dados não foram cadastrados
        $this->assertDatabaseMissing('retangulo', [
            'idretangulo' => $lastId,
            'baseRet' => 'wwe',
            'alturaRet' => 35,
        ]);
    }
}