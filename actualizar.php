<?php  include("templates/header.php"); ?>
    
    
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;">
                    <form style="align-content: center; width: 50%; margin: 10% auto;">

                        

                        <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Codigo Producto</label>
                            <input type="text" id="CodigoP"class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Nombre Producto</label>
                            <input type="text" id="NombP"class="form-control">
                        </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Marca Producto</label>
                            <input type="text" id="MarcaP"class="form-control">
                          </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Precio de Compra</label>
                            <input type="text" id="PrecioC"class="form-control" onkeypress="return solonumeros(event)">
                          </div>

                          <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Cantidad Comprada</label>
                            <input type="text" id="CantidadC"class="form-control" onkeypress="return solonumeros(event)">
                          </div>

                            <div class="d-grid gap-2"><!--Botones-->
                                <button type="button" class="btn btn-primary" id="Modificar"style="width:60%;margin: 0 auto;">Modificar</button>
                                <button type="button" class="btn btn-primary" id="BorrarP"style="width:40%;margin: 0 auto;">Buscar Por Codigo</button>
                            </div> <br>

                           
                        

                            
                        
                        
                    </form>

                </div>
            </article>
        </section>
        <aside>
            
        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>
    