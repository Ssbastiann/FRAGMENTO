<?php
//Incluir clase
include("../clases/Modelo.php");

//Cabecera de API
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
error_reporting(E_ERROR | E_PARSE); //ELIMINA LOS WARNING QUE SE GENERAN SI ESTE CÓDIGO NO ESTÁ
extract($_POST);    
extract($_GET);

//Instancia un clase =
$objLogica = new logica();

/* API PARA REGISTRAR UN CLIENTE */
if (trim($RegistroCliente) == "1") {
    $response = $objLogica->RegistroCliente($name, $email);
    echo $response;
    exit; // Asegúrate de que no haya más salida
}




?>

