<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"] ?? "";
        $contrasena = $_POST["contrasena"] ?? "";
        $contrasena2 = $_POST["contrasena2"] ?? "";
        $contrasena_encrypte = password_hash($contrasena, PASSWORD_DEFAULT);
    
        if(preg_match('/^[A-Z].*$/', $usuario)){
            if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d.]{4,}$/',$contrasena)){
                if($contrasena == $contrasena2){
                   
                    $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena_encrypte')";
    
                    if($conn->query($sql) === TRUE){
                        header("Location: ../admin/panel_inicio.php");
                        exit();
                    }else{
                        echo "Error al registrar";
                    }
                    
                    $conn->close();
                }else{
                    echo "Las contraseñas no coinciden";
                }
            }else{
                echo "La contraseña no es invalida";
            }
        }else{
            echo "El usuario no es valido";
        }
    }
?>