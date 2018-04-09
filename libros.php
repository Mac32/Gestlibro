<?php

require_once "comprobar_in.php";
require_once "conexion.php";

?>
<div class="contenedor">

  <div id="pnl_edit_reg">

    <div id="registrarL" class="">Registrar Libro</div>

    <div id="reg_libro" style="display: none;">
      <?php include "pnl_registrar_libro.php"; ?>
    </div>

  </div>

  <section id="contenedor_tabla">

    <div id="c_buscar">
      <input type="text" id="buscar" />
      <button class="botonB boton">Buscar</button>
    </div>

    <div id="pnl_tabla">
      <div id="tabla">
        <?php require_once "tabla.php"; ?>
      </div>
    </div>

  </section>

</div>
