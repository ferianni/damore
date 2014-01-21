<?php 
ini_set("display_errors", 0);error_reporting(E_ALL ^E_NOTICE);

if ($_GET['enviar']) {
	
	//setTxt('envios.txt',$_GET);
	die("Ok");
}

switch ($_GET['content']) {

	case '0':
	default:?>		


	<?php break;

	case '1':?>
		
		
	Empresa
		

	<?php break;
	
	case '2':?>

	Harinas

	<?php break;

	case '3':?>

	Productos

	<?php break;

	case '4':?>

	Servicios

	<?php break;

	case '5':?>

	Nuestros clientes

	<?php break;

	case '6':?>

	Contactos

	<?php break;

	case '7':?>

	Home

	<?php break;
		
}

?>
