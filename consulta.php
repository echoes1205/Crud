<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <a href="formularioApp.html"> </a>
    <h1>Consulta</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo electronico</th>
        </tr>
        <?php
            include("conexion.php");
            $acceso_db = mysqli_select_db($cone, $cons_base_datos);
            if ($acceso_db) {
                //echo "Acceso a la base de datos realizado exitosamente";
            }
            else {
                //echo "Error en el acceso a la base de datos";
            }
            //Consulta
            $sql="SELECT * FROM Usuarios";
            $result=mysqli_query($cone, $sql);

            while ($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Nombre']."</td>";
                echo "<td>".$row['Correo']."</td>";
                echo "<td> <a href='editar.php?ideditar=".$row['ID']."'>Editar</a>"."-";
                echo "<a onClick=\"javascript:return confirm('Please confirm deletion');\"href='eliminar.php?ideliminar=".$row['ID']."'>Eliminar</a> </td>";
                "</tr>";
                $cone->close();
            }
        ?>
        
    </table>
    <a href="formularioApp.html">Volver al registro </a>


    <script src="" async defer></script>
</body>

</html>