<h2 align="center">EM CASH TESTE</h2><br>
<hr color = "green"><br>
<h3 align="center"> O Teste </h3><br>
<hr color = "green"><br>
<p>O desafio consistia em criar APIs REST para cadastro de polígonos (Triangulo e Quadrado) e retornar a soma total de suas áreas.</p><br>
<h3 align="center"> Linguagens e outras Ferramentas </h3><br>
<hr color = "green"><br>
<p>Além do PHP(Versão 8.2.8), que era obrigatório, também foram utilizados o Laravel(10x), PHPUnit(10) para testes unitários e o Postman para testar as rotas.</p><br>
<h3 align="center"> Instruções</h3><br>
<hr color = "green"><br>
<p> Instalar primeiramente o Xampp ou outro programa similar.</p><br>
<p> Utilizando o Xampp importe o arquivo db.sql (Script do banco de dados) pelo PHPmyAdmin.<p>
<p> Agora na pasta base do Xampp procure pela pasta htdocs e crie seu projeto, por um terminal entre no diretório e escreva composer install. Após ele terminar a instalação é a hora de dihitar o comando php artisan serve</p><br>
<p> Para cadastrar um triângulo, entre na rota http://localhost:8000/api/triangulo (ou http://127.0.0.1:8000/api/triangulo) e insira no corpo da requisição os valores para "baseTri" e "alturaTri". Você também pode realizar esse processo pelo Postman ou outra ferramenta de teste, basta selecionar o método do correto, que no caso do cadastro de triangulo ou retangulo é POST, já para retornar o valor total da soma de todos os polígonos o método é GET. <p><br>
<p>Então os outros comandos e rotas sao:</p>
<p>Retangulo: /api/retangulo - "alturaRet", "baseRet".</p>
<p>Area Total: /api/area-total.</p><br>

<h3 align="center">Teste</h3><br>
<hr color = "green"><br>
<p>Os testes são bem simples de serem feitos, com o PHPUnit instalado, bastar entrar no diretório pelo terminal e digitar o comando ./vendor/bin/phpunit se quiser ver todos os testes. Agora, se quiser um teste em específico o comando é o mesmo e no fim adiciona o comando -- "Nome do teste", que no caso podem ser RetanguloValidoTest ou RetanguloInvalidoTest e a mesma coisa para os testes de triangulos.</p>




