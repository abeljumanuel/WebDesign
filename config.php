<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdunad2022";
$conn = mysqli_connect($servername, $username, $password);
$message = "";

// Create connection
function checkDB(){
    // Check connection
    global $conn;
    if (!$conn) {
        die($message = "Conexión fallida: " . mysqli_connect_error());
    }
    $message = "El Sistema esta funcionando Satisfactoriamente!";
    mysqli_close($conn);
    echo $message;
}
// Crud - C
function createReg(){
    // Check connection
    global $username, $password, $servername;
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // sql to create Register
    $sql = "INSERT INTO inventarios (
            nombre,
            marca,
            cantidad,
            precio
        )
        VALUES(
            '$nombre',
            '$marca',
            $cantidad,
            $precio'
        )";
    
        if (mysqli_query($conn, $sql)) {
            $message = "Se ha creado el registro "&$nombre&" satisfactoriamente";
        } else {
            $message = "Error creando tabla inventarios: " . mysqli_error($conn);
        }
    mysqli_close($conn);
    echo $message;
    echo "<script>setTimeout('window.close();',3000);</script>";
}
?>