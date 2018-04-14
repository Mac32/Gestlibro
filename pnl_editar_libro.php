<?php 

require_once "comprobar_in.php";
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {

  $id_libro = $_GET["id_libro"];

  if ($sentencia = $conexion->prepare("SELECT * FROM libros WHERE id_libro = ?")) {

    $sentencia->bind_param("i", $id_libro);

    if ($sentencia->execute()) {
/////////////////////////////////////////////
// OJooooooooooooooo Arreglar la consulta //
///////////////////////////////////////////
      $resultado = $sentencia->get_result();
      $f_resultado = $resultado->fetch_array();
    }else{
      echo "<script type=\"text/JavaScript\"> alert('Ejecutar sentencia');</script>";
    }

  }else{
    echo "<script type=\"text/JavaScript\"> alert('Preparación');</script>";
  }

}

?>

<form id="frm_edi_lib">

  <div class="campo-formulario">
    <label for="Enombre">Nombre:</label>
    <textarea max="100" rows="3" name="nombre" id="Enombre" required="required" ><?php echo $f_resultado['nombre']; ?></textarea>
  </div>

  <div class="campo-formulario">
    <label for="Eautor">Autor:</label>
    <textarea rows="3" maxlength="50" name="autor" id="Eautor" required ><?php echo $f_resultado['autor']; ?></textarea>
  </div>

  <div class="campo-formulario">
    <label for="Eestado">Estado:</label>

    <div id="c_estado">

      <label for="radio" class="estado">Disponible</label>
      <input type="radio" max="50" name="estado" id="Eestado" class="estado" required value="Disponible"  <?php if ($f_resultado["estado"] == "Disponible") { echo "checked"; } ?> />

      <br />

      <label for="Eradio" class="estado">No disponible</label>
      <input type="radio" max="50" name="estado" id="Eestado" class="estado" value="No disponible" <?php if ($f_resultado["estado"] == "No disponible") { echo "checked"; } ?> />
    </div>
  </div>

  <div class="campo-formulario">
    <label for="Ecodigo">Código:</label>
    <input type="text" maxlength="50" name="codigo" id="Ecodigo" value="<?php echo $f_resultado['codigo']; ?>" />
    <span id="Emsj_codigo"></span>
  </div>

  <div class="campo-formulario">
    <label for="Etipo">Tipo:</label>
    <input type="text" max="50" name="tipo" id="Etipo" value="<?php echo $f_resultado['tipo']; ?>" />
  </div>

  <div class="campo-formulario">
    <label for="Eeditorial">Editorial:</label>
    <input type="text" max="50" name="editorial" id="Eeditorial" value="<?php echo $f_resultado['editorial']; ?>" />
  </div>

  <div class="campo-formulario">
    <button type="button" class="boton" id="btn_editar_libro">Guardar</button>
  </div>
</form>
