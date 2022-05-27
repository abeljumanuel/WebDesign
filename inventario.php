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
                    if (!checkDB()) {
                ?>
                    <tr>
                        <th scope="row">No cuenta con BD</th>
                        <td>puede crearla</td>
                        <td>en menu</td>
                        <td>Administración</td>
                        <td>Crear</td>
                        <td>Base de Datos</td>
                    </tr>
                </tbody>
            </table>
        </form>
                <?php
                    } else {
                        if (checkTable('inventarios')){
                            // cRud - R
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            $sql = "SELECT * FROM inventarios";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
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
                            } else {
                ?>
                    <tr>
                        <th scope="row"> Sin Datos </th>
                        <td> Sin Datos </td>
                        <td> Sin Datos </td>
                        <td> Sin Datos </td>
                        <td> Sin Datos </td>
                        <td> Sin Datos </td>
                    </tr>
                <?php    
                           }
                ?>    
                </tbody>
        </table>
    </form>
    <!-- Button Interface -->
    <a href="interface.php" class="btn btn-primary" role="button">Agregar un Producto</a>
                    <?php
                        } else {
                    ?>
                    <tr>
                        <th scope="row">No cuenta con la Tabla</th>
                        <td>Inventarios puede</td>
                        <td>crearla en menu</td>
                        <td>Administración</td>
                        <td>Crear</td>
                        <td>Tabla</td>
                    </tr>
                </tbody>
            </table>
        </form>
                    <?php
                        }
                    }
                    ?>        