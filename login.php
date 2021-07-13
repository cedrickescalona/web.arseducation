<?php session_start();

if (isset($_SESSION['usuario'])){
	header('Location: producto.php');
}
$errores='';
if($_SERVER['REQUEST_METHOD']== 'POST'){
	$usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password=$_POST['password'];

	
		try{
			$conexion= new PDO('mysql:host=localhost;dbname=id13891477_arseducation', 'id13891477_root', 'RsTEz~jX5RHFVnF=');
		}catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}

		$statement = $conexion->prepare('
			SELECT * FROM usuario WHERE usuario = :usuario AND pass =:password'
		);
		$statement->execute(array(
			':usuario' => $usuario, 
			':password' => $password
		));

		$resultado = $statement->fetch();
		if($resultado !==false){
			$_SESSION['usuario']=$usuario;
			header('Location: inicio.php');
		}else{
			$errores .= 'Datos Incorrectos';
		}
}

require 'vistas/loginVista.php';

?>