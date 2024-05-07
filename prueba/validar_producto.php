<?php
session_start();
if(empty($_SESSION["id"])){
    //header("Location: productos.php");
    $id2 = $_SESSION["id"];
    echo $id2 . "dcs";
   // exit(); // Finalizamos el script despues de redirigir!
};
?>