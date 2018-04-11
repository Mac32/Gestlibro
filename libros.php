<?php

require_once "comprobar_in.php";
require_once "conexion.php";

?>
<div class="contenedor">

  <div id="pnl_edit_reg" class="_25">

    <div id="registrarL" class="">Registrar Libro</div>

    <div id="reg_libro" style="display: none;">
      <?php include "pnl_registrar_libro.php"; ?>
    </div>

  </div>

  <section id="contenedor_tabla" class="_75" style="margin: 0 1em;">

    <div id="c_buscar">
      <input type="text" id="buscar" />
      <button class="botonB boton">Buscar</button>
    </div>

    <div id="pnl_tabla">
      <div id="pnl_tot_fil">

        <?php 
        $total = $conexion->query("SELECT * FROM libros")->num_rows;
        ?>

        <p style="font-weight: bold;">Total de resultados: <span id="totalN"><?php echo $total; ?></span></p>
      </div>

      <div id="tabla">
        <?php require_once "tabla.php"; ?>
      </div>

      <div id="pnl_paginacion">
        <?php 
          // Se establece cuantas filas se van  a mostrar
        $Mostrar = 5;
        $paginas = ceil($total/$Mostrar);

        ?>

        <ul id="cont_num">
        
          <?php
          for ($i=1; $i <= $paginas; $i++) { 
            ?>

            <li>
              <button class="btn_pag" value="<?php echo $i; ?>"><?php echo $i; ?></button>
            </li>

            <?php } ?>
          </ul>
        </div>

      </div>

    </section>

  </div>
