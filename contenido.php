<?php session_start()
if(isset($_SESSION['usuario'])){
	require 'vistas/producto.php';
}else{
	header('Location: login.php');
}

?>