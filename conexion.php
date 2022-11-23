<?php
    $cons_usuario="root";
    $cons_passw="toringo12";
    $cons_base_datos="registroappweb";
    $cons_equipo="localhost";
 
    $cone= mysqli_connect($cons_equipo,$cons_usuario, $cons_passw, $cons_base_datos);
    if (isset($cone))
        {
            //echo "Conexion exitosa a la Base de Datos";
        }
        else 
        {
            //echo "Error en la conexion";
        }
?>