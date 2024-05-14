<?php
include('config.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"] ?? "";
        $imagen = $_POST["imagen"] ?? "";
        $fechaActualizacion = $_POST["fecha"] ?? "";
        

        if(!empty($titulo) && !empty($imagen) && !empty($fechaActualizacion)){
            $sql = "INSERT INTO datos_novedades (titulo, imagen, fechaActualizacion) VALUES ('$titulo', '$imagen', '$fechaActualizacion')";

            if($conn->query($sql) === TRUE){
                header("Location: ../admin/panel_novedad.php");
                exit();
            }else{
                echo "Error al registrar";
            }
        }else{
            echo "<h1>Todos los campos son requeridos</h1>";
        }
    }
?>