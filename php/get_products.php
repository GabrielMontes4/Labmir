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
            $titulo = $product['titulo'];
            $imagen = $product['imagen'];
            $descripcion = $product['descripcion'];
        
        echo "<a href='productos_data.php?titulo=$titulo' id='productos_a' class='gallery-four_block col-lg-4 col-md-6 col-sm-12'>
                <div class='gallery-four_block-inner'>
                    <div class='gallery-four_block-image'>
                        <img src='images/lab_mir/productos/".$imagen."' style='width: 100%'/>
                        <div class='gallery-four_block-overlay'>
                            <h4 class='gallery-one_block-heading text-white'>".$titulo."</h4>
                        </div>
                    </div>
                </div>
            </a>";
        };
    }; 

    $conn->close();
    ?>

