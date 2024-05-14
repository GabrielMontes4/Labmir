<?php
include('config.php');

if(!empty($_GET["id"])){
    $id = $_GET["id"];

    // Vamos a utilizar una sentencia preparada para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM datos_products WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $stmt->bind_result($id2,$titulo,$descripcion,$imagen,$fechaActualizacion);
            
    $stmt->fetch();  
}else{
    header("Location: ../productos.php");
    exit();
}

?>