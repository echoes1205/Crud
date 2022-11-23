<?php
echo "<a href='formularioApp.html'>Registro </a>";
echo "<a href='consulta.php'> Consulta</a>";
//llamar archivo conexion.php
include("conexion.php");
$id = @$_GET['ideditar'];
$sql = "SELECT * FROM Usuarios WHERE ID='$id'";
$result = mysqli_query($cone, $sql);
$row = mysqli_fetch_assoc($result);
$nombre = $row['Nombre'];
$correo = $row['Correo'];

if (isset($_POST['update'])) {
    $nombrenuevo = $_POST['nombrenuevo'];
    $correonuevo = $_POST['correonuevo'];

    $sql = "UPDATE usuarios SET Nombre='$nombrenuevo', Correo='$correonuevo' WHERE ID='$id'"; //comillasmen id
    $result = mysqli_query($cone, $sql);
    if ($result) {
        mysqli_close($cone);
        //echo "Registro actualizado exitosamente";
        header('location:consulta.php');

    } else {
        //echo "Error en la conexion";
    }

} else {
    //echo "Error en la actualizacion";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update user register</title>
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
    <?php //echo "<a href='formularioApp.html'>Home</a>" ?>
    <?php //echo "<a href='consulta.php'>Consulta</a>" ?> 
    <div class="container">
    <div class="central">
        <form method="post">
            <!--<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">-->
            <fieldset>
                <legend>
                    <h1>
                        Update User register data
                    </h1>
                </legend>
                <div class="mb-3">
                    <label class="form-label" for="formvalue1">
                        Nombre:
                    </label>
                    <input type="text" class="form-control" name="nombrenuevo" value="<?php echo $nombre; ?>">
                </div>
                <br>
                <div class="mb-3">
                    <label class="form-label" for="formvalue2">
                        Correo:
                    </label> 
                    <input type="text" class="form-control" name="correonuevo" value="<?php echo $correo; ?>">
                </div>
            </fieldset>
            <p class="container">
                <input type="submit" name="update" value="Update" onclick="mensaje()">
                <input type="reset" value="reset">
            </p>
            <script type='text/javascript'>function mensaje() { alert('Registro actualizado exitosamente'); }
            </script>
        </form>
    </div>
</div>

</body>

</html>
