
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create table
function createTable(){
    $dbname = "bdunad2022";
    global $username, $password, $servername;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS inventarios (
        id INT(10) PRIMARY KEY,
        nombre VARCHAR(10),
        marca VARCHAR(10),
        cantidad INT(15),
        precio INT(15)
        )";
    
        if (mysqli_query($conn, $sql)) {
            echo "Tabla Invetarios creada satisfactoriamente";
        } else {
            echo "Error creando tabla inventarios: " . mysqli_error($conn);
        }
    mysqli_close($conn);
    echo "<script>setTimeout('window.close();',3000);</script>";
}
createTable();
?>