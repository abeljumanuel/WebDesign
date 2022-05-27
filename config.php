<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdunad2022";
$conn = mysqli_connect($servername, $username, $password);
$message = "";

// Create connection
function checkMySql(){
    // Check connection
    global $conn;
    if (!$conn) {
        die($message = "Conexión fallida: " . mysqli_connect_error());
    }
    $message = "El Sistema esta funcionando Satisfactoriamente!";
    mysqli_close($conn);
    echo $message;
}

function checkDB(){
    // Check DB
    global $servername, $username, $password, $dbname;
    try { 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        mysqli_close($conn);
        $ok = True;
    } catch (Exception $e){
        // echo 'Falla en verificación de BD ', $e->getMessage(),"\n";
        $ok = False;
    }
    return $ok;
}

function checkTable($tbName){
    // Check table
    global $servername, $username, $password, $dbname;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SHOW TABLES LIKE '". $tbName ."'";
    if ( $result = mysqli_query($conn, $sql)) {
        $ok = False;
        if($result->num_rows == 1) {
            $ok = True;
        }
    }
    else {
        $ok = False;
    }
    return $ok;
}


?>