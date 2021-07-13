<?php session_start();

if (isset($_SESSION['usuario'])){
  header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD']== 'POST'){
  $usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
  $nombre=$_POST['nombre'];
  $apPat=$_POST['apPat'];
  $apMat=$_POST['apMat'];
  $password=$_POST['password'];
  $password2=$_POST['password2'];

  //echo "$usuario . $password . $password2";

  $errores = '';

  if(empty($usuario) or empty($nombre) or empty($apPat) or empty($apMat) or empty($password) or empty($password2)){
    $errores .= '<li>Por favor llena correctamente todos los campos</li>';
  }else{
    try{
      $conexion= new PDO('mysql:host=localhost;dbname=id13891477_arseducation', 'id13891477_root', 'RsTEz~jX5RHFVnF=');
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }

    if ($password != $password2){
      $errores .='<li>Las contraseñas no son iguales</li>';
    }

  }

  if($errores==''){
    $statement = $conexion->prepare('INSERT INTO usuario(usuario,nombre,apPat,apMat,pass) VALUES (:usuario,:nombre,:apPat,:apMat,:pass)');
    $statement->execute(array(':usuario' => $usuario, ':nombre' => $nombre, ':apPat' => $apPat, ':apMat' => $apMat ,':pass' => $password));

    header('Location:login.php');
  }
}
require 'vistas/registrateVista.php';
?>