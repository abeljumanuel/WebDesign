 <?php
include 'config.php';

// sql to create DataBase
    $sql = "CREATE DATABASE IF NOT EXISTS bdunad2022";
    if (mysqli_query($conn, $sql)) {
        $message="Base de Datos Creada Satisfactoriamente";
    } else {
        $message="Error creando base de datos, la base de datos ya existe!: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    echo $message;
    echo "<script>setTimeout('window.close();',3000);</script>";
?> 