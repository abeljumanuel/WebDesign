<?php

include 'config.php';
include 'header.php';
?>
        <h1>Articulo</h1>
            <form action="crud.php" method="POST">
            <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Ingrese el nombre del Producto"/>
                </div>
                <div class="form-group">
                    <label for="inputBrand">Marca</label>
                    <input type="text" class="form-control" name="inputBrand" id="inputBrand" placeholder="Ingrese la marca"/>
                </div>
                <div class="form-group">
                    <label for="inputCount">Cantidad</label>
                    <input type="number" class="form-control" name="inputCount" id="inputCount" placeholder="Ingrese inventario actual"/>
                </div>
                <div class="form-group">
                    <label for="inputValue">Precio</label>
                    <input type="number" class="form-control" name="inputValue" id="inputValue" placeholder="Ingrese valor del articulo"/>
                    <input type="hidden" name="action" id="action" value="create"/>
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-default" role="button">Volver</a>
                    <button type="submit" class="btn btn-primary submitBtn">Actualizar Inventario</button>
                </div>
            </form>
    </body>
</html>