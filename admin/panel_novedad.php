<?php
include('../php/validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/lista_descripcion.css">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
</head>
<body>
    <nav id="adm_navbar">
        <img src="../images/lab_mir/logo1.png" alt="">
        <h3>Panel de Administrador</h3>
        <div></div>
    </nav>
    
    <main id="adm_distribucion">
        <aside id="adm_aside">
            <section id="aside_menu">
                <h3>Menu</h3>
            </section>
            <ul id="lista_aside">
                <a href="panel_inicio.php"><img src="../images/icons/home.png"><li>Inicio</li></a>
                <a href="panel_productos.php"><img src="../images/icons/product.png"><li>Productos</li></a>
                <a href="panel_novedad.php"><img src="../images/icons/news.png"><li>Novedades</li></a>

                <a href="../php/cerrarSesion.php"><img src="../images/icons/back.png"><li>Cerrar sesión</li></a>
            </ul>
        </aside>

        <section id="adm_spc_panel">
            <div id="adm_spc_list">
                <section id="top_spc_list">
                    <h2 id="title_spc_list">Novedades</h2>
                </section>

                <section id="spc_search_add">
                    <div id="espacio1"></div>
                    <div>
                        <input type="search" placeholder="Buscar..." id="input_search">
                        <input type="submit" id="btn_search" value="Buscar">
                    </div>
                    
                    <a href="panel_crear_novedad.php" class="botones btn_add">Añadir</a>
                </section>

                <div id="br"></div>

                <section id="space_table">
                    <table>
                        <div id="div_thead">
                            <thead>
                                <tr>
                                    <th class="uno">Descripción</th>
                                    <th class="dos">Imagen</th>
                                    <th class="tres">Fecha de creación</th>
                                    <th class="cuatro">Acción</th>
                                </tr>
                            </thead>
                        </div>
                        

                        <tbody>
                            <?php
                            include('../php/getCarruselNews_admin.php')
                            ?>
                        </tbody> 
                    </table>
                   
                </section>
            </div>
        </section>
    </main>
    
</body>
</html>