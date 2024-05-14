<?php 
include('../php/config.php'); 
include('../php/validar_sesion.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/panel_administrador.css">
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
                <a href="register.php"><img src="../images/icons/user.png"><li>Registrar usuario</li></a>
                <a href="../php/cerrarSesion.php"><img src="../images/icons/back.png"><li>Cerrar sesión</li></a>
            </ul>
        </aside>

        <section id="adm_spc_panel">
            <a href="panel_productos.php" id="opciones">
                <section id="section_opc">
                    <div id="azul" class="div"></div>
                    <h4>Productos</h4>
                </section>
                
                <div id="end_azul" class="end"></div>
            </a>
            <a href="panel_novedad.php" id="opciones">
                <section id="section_opc">
                    <div id="rojo" class="div"></div>
                    <h4>Novedades</h4>
                </section>
                
                <div id="end_rojo" class="end"></div>
            </a>
        </section>
    </main>
    
</body>
</html>