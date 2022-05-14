<?php  include("templates/header.php"); ?>
    


    
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;" >
                <form style="align-content: center; width: 30%; margin: 4% auto;">
                    <div class="mb-3">
                      <label for="ValorCompra" class="form-label">Valor de la compra</label>
                      <input type="text" onkeypress="return solonumeros(event)" class="form-control" id="ValorCompra" aria-describedby="valor" onpaste = "return false">
        
                    </div>
                    <div class="mb-3">
                      <label for="Utilidad" class="form-label">Porcentaje de Utilidad</label>
                      <input type="txt" onkeypress="return solonumeros(event)" class="form-control" id="Utilidad" onpaste = "return false">
                    </div>
                    <div class="mb-5">
                        <label for="Impuesto" class="form-label">Porcentaje de Impuesto</label>
                        <input type="txt" onkeypress="return solonumeros(event)"class="form-control" id="Impuesto" onpaste = "return false"> <!--onpaste es para evitar el pegado-->
                    </div >
                    <div class ="d-grid gap-2">
                        <button type="button" class="btn btn-primary"id ="Calcular"style="width:60%;margin: 0 auto;">Calcular</button>
                        <button type="button" class="btn btn-primary" id="Borrar"style="width:30%;margin: 0 auto;">Borrar</button>
                    </div>
                    
                    <div class="mb-3">
                        <label for="Valorventa" class="form-label">Valor venta</label>
                        <input type="txt" class="form-control" id="ValorVenta" aria-describedby="valor" readonly>
          
                      </div>
                      <div class="mb-5">
                        <label for="ganancia" class="form-label">Ganancia</label>
                        <input type="txt" class="form-control" id="Ganancia" readonly >
                      </div>
                  </form>
                
                </div>
            </article>
        </section>
        <aside>
            
        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>