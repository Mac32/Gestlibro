<?php

require_once "comprobar_in.php";

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
      <?php require_once "pnl_tabla.php"; ?>
    </div>

  </section>

</div>
