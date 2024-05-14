<?php
// Vamos a comprobar si hay una sesion activa
session_start();
if(!empty($_SESSION["id"])){
    header("Location: panel_inicio.php");
    exit(); // Finalizamos el script despues de redirigir!
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? "";
    $contrasena = $_POST['contrasena'] ?? "";

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);;
    $stmt->execute();
    $stmt->bind_result($id,$user,$password);

    $stmt->fetch();
    
    if($usuario === $user){
        if(password_verify($contrasena, $password)){
            //iniciar sesion y redirigir
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["id"] = $id;
            echo "estas log";
            header("Location: panel_inicio.php");
            exit();
        }else{
            echo "El usuario o la contraseña son incorrectos2";
            echo "<br> $password <br> $contrasena";
        }
    }else{
        echo "El usuario o la contraseña son incorrectos1";
    }
}
?>