<?php
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect("localhost", "root", "", "roles");

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $usuario;
    $_SESSION['idcargo'] = $fila['idcargo'];
    $idcargo = $_SESSION['idcargo'];

    if ($idcargo == 1) {
        // Mostrar la página de administrador
        header("location: admin.php");
    } elseif ($idcargo == 2) {
        // Redirigir a la página de clientes
        header("location: admin.php");
    } else {
        echo "No tienes permisos para acceder a esta página.";
        exit();
    }
} else {
    include("login.html");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>