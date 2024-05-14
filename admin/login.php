<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login-register.css">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
</head>
<body>
    <div id="espacio_login">
        <section id="area_login">
            <div>
                <img src="../images/lab_mir/logo1.png" alt="" id="logo_login">
            </div>
            
            <h4>Login</h4>

            <?php            
                include('../php/config.php');
                include('../php/login.php');
            ?>

            <form action="" id="form" method="POST">
                <div id="espacio_inputs">
                    <div id="div_input">
                        <input type="text" name="usuario" id="usuario" placeholder="Ingresar usuario...">  
                    </div>
                    <div id="div_input">
                        <input type="password" name="contrasena" id="contrasena" placeholder="Ingresar contraseña...">
                    </div>  
                </div>
                <div id="espacio_boton">
                    <input type="submit"  id="boton_login" value="Ingresar">
                </div>
            </form>

        </section>
    </div>
    
</body>
</html>