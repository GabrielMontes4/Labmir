<?php

include('config.php');

if (!$conn) {
    die("Error al conectar: " . mysqli_connect_error());
};

// Consulta SQL para obtener los datos del producto según el ID
$consulta = "SELECT * FROM datos_novedades";
$resultado = mysqli_query($conn, $consulta);

// Verifica si se encontraron resultados
if ($resultado) {
    while($novedad = $resultado->fetch_array()){
        $id = $novedad['id'];
        $titulo = $novedad['titulo'];
        $imagen = $novedad['imagen'];
        $fecha = $novedad['fechaActualizacion'];

        echo "<div class='gallery-one_block' style='height: 380px; width: 94.5%'>
                <div class='gallery-one_block-inner'>
                    <div class='gallery-one_block-image'>
                        <img src='images/novedades/$imagen' alt='' />
                        <div class='gallery-one_block-overlay'>
                            <div class='gallery-one_block-overlay-content'>
                                <div class='gallery-one_block-category' id='letras_img'>Laboratorio Miranda</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
    }};
?>