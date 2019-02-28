<?php 
	//carga la plantilla con la header y el footer
	switch($_GET['menu']){
		case 'home': case 'mostrar': case 'registrar':
			require_once('Layouts/layout_1/layout.php');break;
		case 'proveedor':
			require_once('Layouts/layout_2/layout.php');break;	
	}
	
 ?>