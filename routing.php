<?php
	switch($_GET['menu']){
		case 'registrar':require_once('Clientes/registrar.php');break;
		case 'mostrar':require_once('Clientes/mostrar.php');break;
		case 'home': require_once('home.php');break;
		case 'proveedor': require_once('proveedores/mostrar.php');break;
	}
 ?>