<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

// Create connection
function checkDB(){
    // Check connection
    global $conn;
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "El Sistema esta funcionando Satisfactoriamente!";
    mysqli_close($conn);
}
?>