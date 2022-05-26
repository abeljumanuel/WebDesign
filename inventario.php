        <h1>Inventario</h1>
        <form action="crud.php" method="POST">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    $sql = "SELECT * FROM inventarios";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['cantidad'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td>
                            <a href="interface.php?action=update&id=<?php echo $row['id'] ?>" role="button" class="btn btn-secundary btn-sm">
                                    <span class="material-icons" style="font-size: 18px;" >mode_edit</span>
                            </a>
                            <a href="crud.php?action=delete&id=<?php echo $row['id'] ?>" role="button" class="btn btn-secundary btn-sm">
                                    <span class="material-icons" style="font-size: 18px;" >delete</span>
                            </a>      
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </form>

        <!-- Button Interface -->
        <a href="interface.php" class="btn btn-primary" role="button">Agregar un Producto</a>



