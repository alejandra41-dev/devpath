<?php
// Credenciales de la base de datos
// Protegido por .htaccess — nunca subir a GitHub
$servidor   = "b2j2yfgnf05udfzh48s1-mysql.services.clever-cloud.com";
$usuario    = "u85wvagwpilqecs8";
$password   = "uKlzO2F9jpwwdCFEY1Io";
$base_datos = "b2j2yfgnf05udfzh48s1";

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
    error_log("Error BD: " . mysqli_connect_error());
    die("Error al conectar con la base de datos. Intenta más tarde.");
}
?>
