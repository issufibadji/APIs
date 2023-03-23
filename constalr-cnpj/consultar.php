<?php

//INCLUIR AUTOLOAD
require __DIR__. '/vendor/autoload.php';

//IMPORTA SPEEDIO
use \App\WebService\Speedio;

//NOVA INSTÂNCIA DE SPEEDIO

$objSpeedio = new Speedio();

//CONSULTA O CPNJ NA APIS DO SPEEDIO
$resultado = $objSpeedio->consultarCNPJ('00000000000191');

echo "<pre>";
print_r($resultado);
echo "</pre>"; exit;


