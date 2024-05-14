<?php

if(!empty($_GET["titulo"])){
    $titulo = $_GET["titulo"];

    // Vamos a utilizar una sentencia preparada para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM datos_products WHERE titulo = ?");
    $stmt->bind_param("s",$titulo);
    $stmt->execute();

    $stmt->bind_result($id,$titulo2,$descripcion,$imagen,$fechaActualizacion);
            
    $stmt->fetch();  
}else{
    header("Location: ../productos.php");
    exit();
}

?>