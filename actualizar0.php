<?php include("templates/header.php"); ?>
    
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;">
                    <form action="php/actualizar1.php" style="align-content: center; width: 50%; margin: 10% auto;" method="post">

                        

                        <div class="input-group mb-3">
                            
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Codigo Producto</label>
                            <input type="text" id="CodigoP"class="form-control" name="Codigo">
                        </div>

                        
                            <div class="d-grid gap-2"><!--Botones-->
                                
                                <button type="submit" class="btn btn-primary" id="BorrarP"style="width:40%;margin: 0 auto;">Buscar Por Codigo</button>
                            </div> <br>

                           
                        
                    </form>

                </div>
            </article>
        </section>
        <aside>
            
        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>

 