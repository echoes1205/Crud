<?php
$nombre = $_POST['nombre'];
$correo = $_POST['emailFormulario'];

include("conexion.php");
//Agregar registros a la base de datos
$sql = "INSERT INTO usuarios(Nombre,Correo) VALUES ('$nombre', '$correo')";
$result = mysqli_query($cone, $sql);
if ($result) {
    echo "Registro creado exitosamente";
} else {
    echo "Error en la conexion";
}
mysqli_close($cone);
?>

