<?php
require('config.php');

function createBackUp(){
    global $username, $password, $servername, $dbname;
    date_default_timezone_set("America/Bogota");
    $conn = mysqli_connect($servername, $username, $password);
    // Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
    $mysqldump='"../../mysql/bin/mysqldump.exe"';

    $backup_file = '"backup/'.$dbname. '-' .date("Y-m-d-H-i-s"). '.sql';
    system("$mysqldump --user=$username --password=$password $dbname > $backup_file",$output);

    $message = 'No ha pasado nada';
    switch($output){
        case 0:
            $message = 'La base de datos <b>' .$dbname .'</b> se ha almacenado correctamente en la siguiente ruta '.getcwd().'/' .$backup_file .'</b>';
        break;
        case 1:
            $message = 'Se ha producido un error al exportar <b>' .$dbname .'</b> a '.getcwd().'/ verifique la siguiente ruta: ' .$backup_file .'</b>';
        break;
        case 2:
            $message = 'Se ha producido un error de exportación, compruebe la siguiente información: <br/><br/><table><tr><td>Nombre de la base de datos:</td><td><b>' .$dbname .'</b></td></tr><tr><td>Nombre de usuario MySQL:</td><td><b>' .$username .'</b></td></tr><tr><td>Contraseña MySQL:</td><td><b> '.$password.' </b></td></tr><tr><td>Nombre de host MySQL:</td><td><b>' .$servername .'</b></td></tr></table>';
        break;
    }
    mysqli_close($conn);
    echo $message;
}
createBackUp();
header( "refresh:3;url=index.php" );

