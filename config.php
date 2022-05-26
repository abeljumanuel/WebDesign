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

?>