<?php
include('config.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"] ?? "";
        $imagen = $_POST["imagen"] ?? "";
        $fechaActualizacion = $_POST["fecha"] ?? "";
        $descripcion = $_POST["descripcion"] ?? "";
        

        if(!empty($titulo) && !empty($imagen) && !empty($descripcion) && !empty($fechaActualizacion)){
            $sql = "INSERT INTO datos_products (titulo, imagen, fechaActualizacion, descripcion) VALUES ('$titulo', '$imagen', '$fechaActualizacion', '$descripcion')";

            if($conn->query($sql) === TRUE){
                header("Location: ../admin/panel_productos.php");
                exit();
            }else{
                echo "Error al registrar";
            }
        }else{
            echo "<h1>Todos los campos son requeridos</h1>";
        }
    }
?>
