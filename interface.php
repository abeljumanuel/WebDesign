<?php

include 'config.php';
include 'header.php';
if(!empty($_GET)){
    function ShowReg(){
        // Check connection
        $id = $_GET['id'];
        global $username, $password, $servername, $dbname;
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        $sql = "SELECT * FROM inventarios WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                $marca = $row['marca'];
                $cantidad = $row['cantidad'];
                $precio = $row['precio'];
                $data = $row;
            }
        }
        mysqli_close($conn);
        return $data;
    }
    $data = ShowReg();
}

?>
        <h1>Articulo</h1>
            <form action="crud.php" method="POST">
            <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Ingrese el nombre del Producto" <?php if (!empty($_GET)){ echo 'value="'. $data['nombre'] .'"';} ?>/>
                </div>
                <div class="form-group">
                    <label for="inputBrand">Marca</label>
                    <input type="text" class="form-control" name="inputBrand" id="inputBrand" placeholder="Ingrese la marca" <?php if (!empty($_GET)){ echo 'value="'. $data['marca'] .'"';} ?>/>
                </div>
                <div class="form-group">
                    <label for="inputCount">Cantidad</label>
                    <input type="number" class="form-control" name="inputCount" id="inputCount" placeholder="Ingrese inventario actual" <?php if (!empty($_GET)){ echo 'value='. $data['cantidad'].' ';} ?>/>
                </div>
                <div class="form-group">
                    <label for="inputValue">Precio</label>
                    <input type="number" class="form-control" name="inputValue" id="inputValue" placeholder="Ingrese valor del articulo" <?php if (!empty($_GET)){ echo 'value='. $data['precio'].' ';} ?>/>
                    <?php if (!empty($_GET)){ echo '<input type="hidden" name="idValue" id="idValue" value='. $data['id'] .' />';} ?>
                    <input type="hidden" name="action" id="action" <?php if (!empty($_GET)){ echo 'value="update"'; } else {echo 'value="create"';} ?> />
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-secondary" role="button">Volver</a>
                    <button type="submit" class="btn btn-primary submitBtn">Actualizar Inventario</button>
                </div>
            </form>
    </body>
</html>