<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/panel_edicion.css">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    
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
                    <h2 id="title_spc_list">Productos</h2>
                    <?php
                    include('../php/validar_sesion.php');
                    include('../php/config.php');
                    include('../php/añadir_product.php');
                    ?>
                </section>

                <form id="spc_edition" method="POST">
                
                    <div id="edition_area_1">
                        <section id="area_new_text">
                            <h4 id="new_text">Escriba el titulo</h4>
                        </section>
                        <input type="text" placeholder="Escribe el título..." name="titulo" id="titulo" class="input_desc">
                    </div>

                    <div id="edition_area_2">
                        <section id="area_new_text">
                            <h4 id="new_text">Nueva imagen</h4>
                        </section>

                        <section class="btnSubir_alert">
                            <label for="imagen" id="input_boton">Subir imagen</label>
                            <p id="anuncio">Procura que la imagen sea lo más cuadrada posible</p>
                            <div id="form_alert"></div>
                        </section>
                        
                        <div id="edition_img">
                            <div id="photo">    
                                <img id="img" src="">
                            </div>
                            <div class="upimg">
                                <input type="file" name="imagen" id="imagen">
                            </div> 
                        </div>
                    </div>

                    <div id="edition_text">
                        <section id="area_new_text_bottom">
                            <h4 id="new_text">Escriba la descripción</h1>
                        </section>
                        
                        <section id="area_spc_editor">
                                <textarea name="descripcion" id="descripcion"></textarea>
                        </section>
                    </div>

                    <div id="spc_submit">
                        <div> 
                            <input type="date" name="fecha" id="fecha">
                            <p id="anuncio">Introducir la fecha de actualizacion</p>
                        </div>
                        
                        <input type="submit" value="Subir" id="input_boton">
                        <span></span>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="../js/edicion_texto.js"></script>
    <script src="../js/cambio_img.js"></script>
</body>
</html>