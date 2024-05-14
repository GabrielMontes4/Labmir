<?php
include('config.php');

// Obtén el ID del registro a eliminar
$id = $_GET["id"];

// Consulta para eliminar el registro
$query = "DELETE FROM datos_novedades WHERE id = '$id'";
$result = mysqli_query($conn, $query) or trigger_error($db->error);

if ($result) {
    // Redirige a la página de consulta de tareas (o donde desees)
    header("Location: ../admin/panel_novedad.php");
    exit();
} else {
    // Muestra un mensaje de error si no se pudo eliminar
    //echo '<script>alert("El ID ya existe"); window.location.href="paila.php";';
    echo '<script>alert("El ID no ya existe");</script>';
};

mysqli_close($conn);
?>
