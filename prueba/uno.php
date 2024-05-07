<?php
    include("dos.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $titulo = $_POST["titulo"] ?? "";
        $imagen = $_POST["imagen"] ?? "";
        $descripcion = $_POST["descripcion"] ?? "";
        $fechaActualizacion = $_POST["fecha"] ?? "";
        

        if(!empty($titulo) && !empty($imagen) && !empty($descripcion)){
            $sql = "INSERT INTO datos_products (titulo, imagen, fechaActualizacion, descripcion) VALUES ('$titulo', '$imagen', '$fechaActualizacion', '$descripcion')";

            if($conn->query($sql) === TRUE){
                echo "Registro exitoso!";
            }else{
                echo "Error al registrar";
            }
    }}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="titulo" id="titulo">
        <input type="file" name="imagen" id="imagen">
        <textarea name="descripcion" id="descripcion"></textarea>
        <input type="date" name="fecha" id="fecha">
        <input type="submit" value="enviar">
    </form>

    <script src="main.js"></script>
</body>
</html>