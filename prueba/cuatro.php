<?php
//session_start();

if(!empty($_GET["id"])){
    $id = $_GET["id"];

    // Vamos a utilizar una sentencia preparada para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM datos_products WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $stmt->bind_result($id2,$titulo,$imagen,$descripcion,$fechaActualizacion);
            
    $stmt->fetch();  
}else{
    header("Location: productos.php");
    exit();
}
/*$consulta = "SELECT * FROM datos_products";
    $resultado = mysqli_query($conn, $consulta);

    // Verifica si se encontraron resultados
    if ($resultado) {
        while($product = $resultado->fetch_array()){
            $id = $product['id'];
            $titulo = $product['titulo'];
            $imagen = $product['imagen'];
            $descripcion = $product['descripcion'];}}*/

?>