<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

//GitHub: JMultimidia
$resposta = $client->request(
	'GET', //tipo da requisição
	'https://api.github.com/users/JMultimidia' //URL da API a ser chamada
);

//echo $resposta->getStatusCode(); //pode ser 200, 404, 500, 401
//$dados = $resposta->getBody();
//echo $dados;
$dados = json_decode($resposta->getBody());

echo '<strong>Usuário: </strong>'.$dados->login.'<br/>
<strong>Nome: </strong>'.$dados->name.'<br/>
<strong>Bio: </strong>'.$dados->bio.'<br/>';
