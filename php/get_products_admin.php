<?php
    include('config.php');
    // Verifica la conexión
   if (!$conn) {
        die("Error al conectar: " . mysqli_connect_error());
    }
    
    // Consulta SQL para obtener los datos del producto según el ID
    $consulta = "SELECT * FROM datos_products";
    $resultado = mysqli_query($conn, $consulta);
   
    // Verifica si se encontraron resultados
    if ($resultado) {
        
        while($product = $resultado->fetch_array()){
            $id = $product['id'];
            $titulo = $product['titulo'];
            $imagen = $product['imagen'];
            $fecha = $product['fechaActualizacion'];

        echo "<tr>
                <td id='title_list' class='uno'>$titulo</td>
                <td id='img_list' class='dos'>
                    <div id='img_div'>
                        <img src='../images/lab_mir/productos/$imagen' style='width: 95px; height: 95px' alt='Imagen'>
                    </div>
                </td>
                <td id='update' class='tres'>$fecha</td>
                <td id='spc_btns' class='cuatro'>
                    <div id='spc_btns_div'>
                        <a href='panel_update_products.php?id=$id' class='btn_editar botones'>Editar</a>
                        <a href='../php/delete_product.php?id=$id' class='btn_eliminar botones'>Eliminar</a>
                    </div>
                </td>
            </tr>";
        
        }
        
    };

    $conn->close();
    ?>

