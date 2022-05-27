
<?php
include 'config.php';

// Create table
function createTable(){
    global $username, $password, $servername, $dbname;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS inventarios (
        id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(50),
        marca VARCHAR(20),
        cantidad INT(15),
        precio INT(15)
        )";
    
        if (mysqli_query($conn, $sql)) {
            echo "Tabla Invetarios creada satisfactoriamente";
        } else {
            echo "Error creando tabla inventarios: " . mysqli_error($conn);
        }
    mysqli_close($conn);
    header( "refresh:3;url=index.php" );
}
createTable();
?>