<?php
include('config.php');
session_start();
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];

    // Vamos a utilizar una sentencia preparada para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $stmt->bind_result($id2, $usuario, $contraseña);
    $stmt->fetch();
    
}else{
    header("Location: login.php");
    exit();
}

?>