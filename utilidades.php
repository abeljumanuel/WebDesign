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
                            <option value="1000">Kilobyte</option>
                            <option value="1000000">Megabyte</option>
                            <option value="1000000000">Gigabyte</option>
                            <option value="1000000000000">Terabyte</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="measureRequired">Medida Destino</label>
                        <select id="measureRequired" class="form-control">
                            <option selected>Choose...</option>
                            <option value="1">Bytes</option>
                            <option value="0.001">Kilobyte</option>
                            <option value="0.000001">Megabyte</option>
                            <option value="0.000000001">Gigabyte</option>
                            <option value="0.000000000001">Terabyte</option>
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


