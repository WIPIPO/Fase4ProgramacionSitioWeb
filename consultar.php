<?php  include("templates/header.php"); ?>
    <div id="Contenedor">
        <section>
            <article>
                <div class="container" style="align-content: center; width: 100%;">
                    <form style="align-content: center; width: 50%; margin: 10% auto;" action="php/Consultar.php" role="form" method="POST">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01" style="width: 40%;">Codigo Producto</label>
                            <input type="text" name="Codigo"class="form-control">
                        </div>
                        <div class="d-grid gap-2"><!--Botones-->
                                <button type="submit" class="btn btn-primary" name="submit" style="width:40%;margin: 0 auto;">Buscar Por Codigo</button>
                        </div> 
                        <br>   
                    </form>
                </div>
            </article>
        </section>
        <aside>    
        </aside>
    </div>

    <?php  include("templates/footer.php"); ?>
   