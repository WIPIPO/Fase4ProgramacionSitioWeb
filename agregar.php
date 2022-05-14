<?php  include("templates/header.php"); ?>
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;">
                    <form style="align-content: center; width: 50%; margin: 10% auto;" action="php/insertar.php" method="POST"  >

                        

                        <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Codigo Producto</label>
                            <input type="text" id="CodigoP"class="form-control" name="CodigoP">
                         
                        </div>

                        <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Nombre Producto</label>
                            <input type="text" id="NombP" class="form-control" name="NombP">
                        </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Marca Producto</label>
                            <input type="text" id="MarcaP"class="form-control" name="MarcaP">
                          </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Precio de Compra</label>
                            <input type="text" id="PrecioC"class="form-control" onkeypress="return solonumeros(event)" name="PrecioC">
                          </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Cantidad Comprada</label>
                            <input type="text" id="CantidadC"class="form-control" onkeypress="return solonumeros(event)"name="CantidadC">
                          </div>

                            <div class="d-grid gap-2"><!--Botones-->
                                
                                <button type="submit" class="btn btn-primary"id="Registrar"style="width:60%;margin: 0 auto;">Registrar</button>
                                
                            </div> 

                        
                    </form>

                </div>
            </article>
        </section>
        <aside>
            
        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>