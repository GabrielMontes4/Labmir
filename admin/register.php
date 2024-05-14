<?php
include('../php/config.php');
include('../php/register.php');
include('../php/validar_sesion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/login-register.css">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
</head>
<body>
    <div id="espacio_login">
        <section id="area_login">
            <div id="top_register">
                <a href="panel_inicio.php"><img src="../images/icons/regresar.png" alt="" id="regresar"></a>
                <img src="../images/lab_mir/logo1.png" alt="" id="logo_login">
                <span id="espacio_blanco"></span>
            </div>

            <h4>Register</h4>
            
            <form action="" id="form" method="POST">
                <div id="espacio_inputs">
                    <div id="div_input">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario">  
                    </div>
                    <div id="div_input">
                        <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                    </div>  
                    <div id="div_input">
                        <input type="password" name="contrasena2" id="contrasena2" placeholder="Confirmar contraseña">
                    </div> 
                </div>

                    <input type="submit" href="panel_administrador.html" id="boton_login" value="Ingresar">
            </form>
        </section>
    </div>
    
</body>
</html>