<?php
    include('config.php');
    if (!$conn) {
        die("Error al conectar: " . mysqli_connect_error());
    }
    
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
            
            echo "<tr>
                <td id='title_list' class='uno'>$titulo</td>
                <td id='img_list' class='dos'>
                    <div id='img_div'>
                        <img src='../images/novedades/$imagen' style='height: 95px; width: 80px' alt='Imagen'>
                    </div>
                </td>
                <td id='update' class='tres'>$fecha</td>
                <td id='spc_btns' class='cuatro'>
                    <div id='spc_btns_div'>
                        <a href='panel_update_novedad.php?id=$id' class='btn_editar botones'>Editar</a>
                        <a href='../php/delete_novedad.php?id=$id' class='btn_eliminar botones'>Eliminar</a>
                    </div>
                </td>
            </tr>";
        }

    }
?>







