<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //session_start();
    $_SESSION["login"] = true;
    $_SESSION["id"] = $id;
    header("Location: dashboard.php");
    exit();
    //echo "caspncioasdncoasndcosanc";
};
?>