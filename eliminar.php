<?php
    $id=$_GET['ideliminar'];
    include("conexion.php");
    $sql="DELETE FROM  usuarios WHERE ID='".$id."'";
    $result=mysqli_query($cone, $sql);
    if ($result) {
        echo "Registro eliminado exitosamente";
        //header('location:consulta.php');
    }
    else {
        echo "Error en la operacion";
    }
    mysqli_close($cone);
?>