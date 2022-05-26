<?php
include 'config.php';
if (!empty($_POST)) {
    $nombre = $_POST['inputName'];
    $marca = $_POST['inputBrand'];
    $cantidad = $_POST['inputCount'];
    $precio = $_POST['inputValue'];
    // Crud - C
    function createReg(){
        // Check connection
        global $username, $password, $servername, $dbname, $nombre, $marca, $cantidad, $precio;
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        

        // sql to create Register
        $sql = "INSERT INTO inventarios (
                nombre,
                marca,
                cantidad,
                precio
            )
            VALUES (
                '$nombre',
                '$marca',
                '$cantidad',
                '$precio'
            )";
        
            if (mysqli_query($conn, $sql)) {
                echo "Se ha creado el registro ". $nombre ." satisfactoriamente <br>";
                header( "refresh:3;url=index.php" );
            } else {
                echo "Error creando el registro ". $nombre ." en inventarios: <br>" . mysqli_error($conn);
                header( "refresh:3;url=interface.php" );
            }
        mysqli_close($conn);
    }
    createReg();
} elseif ($_GET['action'] == 'update') {
    echo "Vamos a editar ese registro";
    header( "refresh:3;url=index.php" );
}elseif ($_GET['action'] == 'delete') {
    function deleteReg(){
        // Check connection
        $id = $_GET['id'];
        global $username, $password, $servername, $dbname;
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        $sql = "SELECT nombre FROM inventarios WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $nombre = $result['nombre'];

                // sql to delete Register
                $sql = "DELETE FROM inventarios WHERE id=$id";        
                    if (mysqli_query($conn, $sql)) {
                        echo "Se ha eliminado el registro ". $nombre ." satisfactoriamente <br>";
                        header( "refresh:3;url=index.php" );
                    } else {
                        echo "No pudo eliminarse el registro con el id ". $_GET['id'] ." en inventarios: <br>" . mysqli_error($conn);
                        header( "refresh:3;url=interface.php" );
                    }
            }
        }
        mysqli_close($conn);
    }
    deleteReg();   
}

?>