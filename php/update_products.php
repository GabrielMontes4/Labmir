<?php
include('config.php');
if(!empty($_GET["id"])){
    $id = $_GET["id"];
 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"] ?? "";
        $imagen = $_POST["imagen"] ?? "";
        $descripcion = $_POST["descripcion"] ?? "";
        $fechaActualizacion = $_POST["fecha"] ?? "";
    };

    if(!empty($titulo) && !empty($imagen) && !empty($descripcion) && !empty($fechaActualizacion)){
        $sql = "UPDATE datos_products  SET titulo = '$titulo', imagen = '$imagen', fechaActualizacion = '$fechaActualizacion', descripcion = '$descripcion' WHERE id = '$id'";
        echo 1;
        if($conn->query($sql) === TRUE){
            echo "Actualización exitoso!";
            header("Location: panel_productos.php");
            $conn->close();
        }else{
            echo "Error al actualizar";
        };
    };

    mysqli_close($conn);
}else{
    header("Location: ../admin/panel_productos.php");
    exit();
}
    ?>
