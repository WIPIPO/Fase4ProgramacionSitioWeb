<?php  include("templates/header.php"); ?>
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;">
                    <form style="align-content: center; width: 40%; margin: 4% auto;">

                        <div class="mb-3">
                            
                            <input type="text" onkeypress="return solonumeros(event)" class="form-control"
                                id="DatoE" aria-describedby="DatoEntrada" onpaste="return false"><!--onpaste es para evitar el pegado-->
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">UNIDAD DE DATO</label>
                            <select name="b1" class="form-select" id="UdatosE">
                              <option selected>Seleccione...</option>
                              <option value="1000000000000">Byte</option>
                              <option value="1000000000">Kilobyte</option>
                              <option value="1000000">Megabyte</option>
                              <option value="1000">Gigabyte</option>
                              <option value="1">Terabyte</option>
                            </select>
                          </div>

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary" id="convertir"style="width:60%;margin: 0 auto;">Convertir</button>
                            <button type="button" class="btn btn-primary" id="BorrarD"style="width:30%;margin: 0 auto;">BorrarD</button>
                        </div> <br>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">UNIDAD DE DATO</label>
                            <select class="form-select" id="UdatosS">
                                <option selected>Seleccione...</option>
                                <option value="1000000000000">Byte</option>
                                <option value="1000000000">Kilobyte</option>
                                <option value="1000000">Megabyte</option>
                                <option value="1000">Gigabyte</option>
                                <option value="1">Terabyte</option>
                            </select>
                          </div>
                        

                        <div class="mb-1">
                            
                            <input type="txt" class="form-control" id="DatosS" aria-describedby="DatosS" readonly>

                        </div>
                        
                        
                    </form>

                </div>
            </article>
        </section>
        <aside>

        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>