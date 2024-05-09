<?php
    include 'dos.php';
    
    // Verifica la conexión
   if (!$conn) {
        die("Error al conectar: " . mysqli_connect_error());
    }

    // ID del producto que deseas obtener
    //$id_producto = 1;
    
    // Consulta SQL para obtener los datos del producto según el ID
    $consulta = "SELECT * FROM datos_products";
    $resultado = mysqli_query($conn, $consulta);
   
    // Verifica si se encontraron resultados
    if ($resultado) {
        
        while($product = $resultado->fetch_array()){
            $id = $product['id'];
            $titulo = $product['titulo'];
            $imagen = $product['imagen'];
            $descripcion = $product['descripcion'];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
			$valor_id = $_POST["valor_id"];
            //session_start();
            //$_SESSION["id"] = $valor_id;
            header("Location: productos_data.php?id=$valor_id");
            exit();
        }
        
        echo "<a href='productos_data.php?id=$id' id='a' class='gallery-four_block col-lg-4 col-md-6 col-sm-12'>
                <label for='submit".$id."' class='gallery-four_block-inner'>
                    <div class='gallery-four_block-image'>
                    <img src='images/".$imagen."' style='width: 100%'/>";
        
        echo "<div class='gallery-four_block-overlay'>
                <h4 class='gallery-one_block-heading text-white'>".$titulo."</h4>
              </div>
            </div>
			<input type='hidden' name='valor_id' value='".$id."'>
            <input type='submit' id='submit".$id."'>
          </label>
        </a>";
        
        }
        
    };

    $conn->close();
    ?>