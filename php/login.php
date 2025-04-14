<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli("localhost", "jotadlub1_joseph", "Ellayyo.123@", "jotadlub1_app_jotavix_db");

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion-> connect_error);
}

$correo = $_POST ['email'];
$clave = $_POST ['password'];

$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($clave, $usuario['clave'])) {

        header("Location: ../home.html");
        exit();

        } else {

            echo "Contrase«Ða incorrecta.";

        }

} else {

    echo "Correo no encontrado.";

}

$stmt->close();
$conexion->close();
?>