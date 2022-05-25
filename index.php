<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <title>Computer SAS</title>
    </head>
    <body style="padding:35px;">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Computer SAS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inventario</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Utilidades
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#ventas">Venta</a>
                                <a class="dropdown-item" href="#calculadora">Calculadora</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administración
                                <span class="sr-only">(current)</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="crearBD.php" target="_blank">Crear Base de Datos</a>
                                <a class="dropdown-item" href="crearTabla.php" target="_blank">Crear Tabla</a>
                                <a class="dropdown-item" href="#">Generar Reporte PDF</a>
                                <a class="dropdown-item" href="#">Generar BackUp</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
           
        <h1>Administración</h1>
        <p>
            <?php
                include 'config.php';
                checkDB();
            ?>


        </p>
        <h1>Inventario</h1>
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
                <tr>
                    <th scope="row">101</th>
                    <td>Latitude Rugged 14</td>
                    <td>DELL</td>
                    <td>10</td>
                    <td>1.500.000</td>
                    <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>    
                    </td>
                </tr>
                <tr>
                    <th scope="row">102</th>
                    <td>VivoBook Pro 14</td>
                    <td>ASUS</td>
                    <td>15</td>
                    <td>3.999.000</td>
                    <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>    
                    </td>
                </tr>
                <tr>
                    <th scope="row">103</th>
                    <td>Idea Pad3 14</td>
                    <td>Lenovo</td>
                    <td>115</td>
                    <td>1.549.000</td>
                    <td>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>    
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Button to trigger modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalForm">Agregar un Producto</button>

        <!-- The Modal -->  
        <div class="modal fade" id="modalForm" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <!--<button type="button" class="close" onclick="location.href='../form_insertar.html'">&times;</button>-->
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form role="form">
                            <div class="form-group">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Ingrese el nombre del Producto"/>
                            </div>
                            <div class="form-group">
                                <label for="inputBrand">Marca</label>
                                <input type="text" class="form-control" id="inputBrand" placeholder="Ingrese la marca"/>
                            </div>
                            <div class="form-group">
                                <label for="inputCount">Cantidad</label>
                                <input type="text" class="form-control" id="inputCount" placeholder="Ingrese inventario actual"/>
                            </div>
                            <div class="form-group">
                                <label for="inputValue">Precio</label>
                                <input type="text" class="form-control" id="inputValue" placeholder="Ingrese valor del articulo"/>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Agregar un Producto</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function submitContactForm(){
                var nombre = $('#inputName').val();
                var marca = $('#inputBrand').val();
                var cantidad = $('#inputCount').val();
                var precio = $('#inputValue').val();
                
                if(nombre.trim() == '' ){
                    alert('Por favor ingrese el nombre.');
                    $('#inputName').focus();
                    return false;
                }else if(marca.trim() == '' ){
                    alert('Por favor ingrese la marca.');
                    $('#inputBrand').focus();
                    return false;
                }else if(cantidad.trim() == '' ){
                    alert('Por favor ingrese el inventario actual.');
                    $('#inputCount').focus();
                    return false;
                }else if(precio.trim() == '' ){
                    alert('Por favor ingrese el valor.');
                    $('#inputValue').focus();
                    return false;
                }else{
                    $.ajax({
                        type:'POST',
                        url:'submit_form.php',
                        data:'contactFrmSubmit=1&nombre='+nombre+'&marca='+marca+'&cantidad='+cantidad+'&precio='+precio,
                        beforeSend: function () {
                            $('.submitBtn').attr("disabled","disabled");
                            $('.modal-body').css('opacity', '.5');
                        },
                        success:function(msg){
                            if(msg == 'ok'){
                                $('#inputName').val('');
                                $('#inputEmail').val('');
                                $('#inputMessage').val('');
                                $('.statusMsg').html('<span style="color:green;">Cargue realizado Satisfactoriamente.</p>');
                            }else{
                                $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                            }
                            $('.submitBtn').removeAttr("disabled");
                            $('.modal-body').css('opacity', '');
                        }
                    });
                }
            }
        </script>

 




        
        <br><br>
        <h1 id="utilidades">Utilidades</h1>
        <h2 id = "ventas">Venta</h2>
        <script>
            function saleValue(){
                let validationDefault01 = document.fVenta.validationDefault01.value;
                let validationDefault02 = document.fVenta.validationDefault02.value;
                let validationDefault03 = document.fVenta.validationDefault03.value;
                document.fVenta.validationDefault04.value=parseFloat(validationDefault01)*(((parseFloat(validationDefault02)+parseFloat(validationDefault03))*0.01)+1);
                document.fVenta.validationDefault05.value=parseFloat(validationDefault01)*((parseFloat(validationDefault02))*0.01);
            }

            function cleanform(){
                document.getElementById('fVenta').reset();
            }
        </script>
        <div>
            <form name="fVenta" id="fVenta" action="index.html" method="POST">
                <div class="form-group">
                    <label for="validationDefault01">Valor de la Compra</label>
                    <input type="text" class="form-control" id="validationDefault01" name="validationDefault01" placeholder="Valor de la Compra" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault02">Porcentaje de Utilidad</label>
                    <input type="text" class="form-control" id="validationDefault02" name="validationDefault02" placeholder="Porcentaje de Utilidad" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault03">Porcentaje de Impuestos</label>
                    <input type="text" class="form-control" id="validationDefault03" name="validationDefault03" placeholder="Porcentaje de Impuestos" required>
                </div>
                <button type="button" value="calcular" onclick="saleValue()" class="btn btn-primary">Calcular</button>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault04">Valor de Venta</label>
                        <input type="text" class="form-control" id="validationDefault04" name="validationDefault04"  disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault05">Ganancia</label>
                        <input type="text" class="form-control" id="validationDefault05" name="validationDefault05"  disabled>
                    </div>
                </div>
                <button type="button" value="borrar" onclick="cleanform()" class="btn btn-primary">Borrar</button>
            </form>
        </div>
        <br><br>
        <h2 id="calculadora">Calculadora</h2>
        <script>
            function ConverterValue(){
                let validationDefault06 = document.fConverter.validationDefault06.value;
                let selectOrigin = document.getElementById('measureOrigin');
                let valueOrigin = selectOrigin.options[selectOrigin.selectedIndex].value;
                toBytes = parseFloat(validationDefault06)*valueOrigin;
                let selectRequired = document.getElementById('measureRequired');
                let valueRequired = selectRequired.options[selectRequired.selectedIndex].value;
                converted = toBytes * valueRequired;
                document.fConverter.validationDefault07.value= converted;
            }
        </script>
        <div>
            <form name="fConverter" id="fConverter" action="index.html" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationDefault06">Valor a Convertir</label>
                        <input type="number" class="form-control" id="validationDefault06" placeholder="Valor a Convertir">
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="measureOrigin">Medida Origen</label>
                        <select id="measureOrigin" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1">Bytes</option>
                            <option value="0.001">Kilobyte</option>
                            <option value="0.000001">Megabyte</option>
                            <option value="0.000000001">Gigabyte</option>
                            <option value="0.000000000001">Terabyte</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="measureRequired">Medida Destino</label>
                        <select id="measureRequired" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1">Bytes</option>
                            <option value="1000">Kilobyte</option>
                            <option value="1000000">Megabyte</option>
                            <option value="1000000000">Gigabyte</option>
                            <option value="1000000000000">Terabyte</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="validationDefault07">Resultado</label>
                        <input type="number" class="form-control" id="validationDefault07" name="validationDefault07"  disabled>
                    </div> 
                </div>
                <button type="button" value="convertir" onclick="ConverterValue()" class="btn btn-primary">Convertir</button>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

            </div>
        </div>
    </div>
</div>
<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajax</h4>
            </div>
            <div class="modal-body">
                <form method="POST_">
                </form>
            </div>
        </div>
    </div>
</div>