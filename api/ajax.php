<?
//AJAX
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

include("clases/logica.php");

extract($_POST);    
extract($_GET);

//variables:::
$objLogica = new logica();

///////////////////////////////////////////////
if(trim($almacenar)=="1")
{
$objLogica->guardarComentario($valorNombreCompleto,$valorFecha,$valorComentario);

$resultado_arr[] = array("mensaje" => "Registro Almacenado"); 
echo json_encode($resultado_arr);
}
///////////////////////////////////////////////
if(trim($enviarSMS)=="1")
{
$objLogica->envioSMS($valorTelefono,$valorMensajeSMS);

$resultado_arr[] = array("mensaje" => "SMS enviado"); 
echo json_encode($resultado_arr);    
}
///////////////////////////////////////////////
if(trim($enviarEmail)=="1")
{
$objLogica->envioEmail($valorAsunto,$valorMensaje,$valorDestino);

$resultado_arr[] = array("mensaje" => "Email enviado"); 
echo json_encode($resultado_arr);
}
///////////////////////////////////////////////

?>

