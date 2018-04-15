<?php
require_once "comprobar_in.php";
require_once "conexion.php";
?>

<form id="frm_reg_lib">

  <div class="campo-formulario">
    <label for="nombre">Nombre:</label>
    <textarea rows="3" max="50" name="nombre" id="nombre" ></textarea>
  </div>

  <div class="campo-formulario">
    <label for="autor">Autor:</label>
    <textarea rows="3" max="50" name="autor" id="autor" required ></textarea>
  </div>

  <div class="campo-formulario">
    <label for="estado">Estado:</label>

    <div id="c_estado">

      <label for="radio" class="estado">Disponible</label>
      <input type="radio" maxlength="50" name="estado" id="estado" class="estado" required value="Disponible"  checked />

      <br />

      <label for="radio" class="estado">No disponible</label>
      <input type="radio" maxlength="50" name="estado" id="estado" class="estado" value="No disponible" required />
    </div>
  </div>

  <div class="campo-formulario">
    <label for="codigo">Código:</label>
    <input type="text" maxlength="50" name="codigo" id="codigo" required />
    <span id="msj_codigo"></span>
  </div>

  <div class="campo-formulario">
    <label for="tipo">Tipo:</label>
    <input type="text" maxlength="50" name="tipo" id="tipo" required />
  </div>

  <div class="campo-formulario">
    <label for="editorial">Editorial:</label>
    <input type="text" maxlength="50" name="editorial" id="editorial" required />
  </div>

  <div class="campo-formulario">
    <button type="button" class="boton" id="btn_registrar_libro">Registrar</button>
  </div>
</form>