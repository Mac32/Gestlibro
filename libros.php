<?php

require_once "comprobar_in.php";
require_once "conexion.php";

?>
<main class="contenedor">

  <div id="pnl_edit_reg">

    <a href="" id="registrarL" class="boton boton_nav">Registrar</a>

    <div id="reg_libro" style="display: none;"">
      <?php require_once "pnl_registrar_libro.php"; ?>
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

</main>
<?php 
require_once "agregar_script.php";
?>