<?php
include('config.php');
if(!empty($_GET["id"])){
    $id = $_GET["id"];
 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"] ?? "";
        $imagen = $_POST["imagen"] ?? "";
        $fechaActualizacion = $_POST["fecha"] ?? "";
    };

    if(!empty($titulo) && !empty($imagen) && !empty($fechaActualizacion)){
        $sql = "UPDATE datos_novedades  SET titulo = '$titulo', imagen = '$imagen', fechaActualizacion = '$fechaActualizacion' WHERE id = '$id'";

        if($conn->query($sql) === TRUE){
            echo "Actualización exitoso!";
            header("Location: panel_novedad.php");
            $conn->close();
        }else{
            echo "Error al actualizar";
        }
    }

    mysqli_close($conn);
}else{
    header("Location: ../admin/panel_novedad.php");
    exit();
}
    ?>
