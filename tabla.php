<?php
require_once "comprobar_in.php";

?>
<?php 
function mostrar_tabla($query = "SELECT * FROM libros"){
  $conexion = new mysqli('localhost', 'root', '', 'libreria');
  ?>
  <table>
    <thead> 
      <tr>
        <th>Nombre</th>
        <th>Autor</th>
        <th>Código</th>
        <th>Estado</th>
        <th>Usado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $qlibro = $conexion->query($query);
      while($f_consulta = $qlibro->fetch_array()): 
        ?>

        <tr id="fila">
          <td><?php echo $f_consulta["nombre"] ?></td>
          <td><?php echo $f_consulta["autor"] ?></td>
          <td><?php echo $f_consulta["codigo"] ?></td>
          <td><?php echo $f_consulta["estado"] ?></td>
          <td><?php echo $f_consulta["usado"] ?></td>
          <td>
            <button id="asignar" class="botonT" value="<?php echo $f_consulta['id_libro']; ?>">Asignar</button>
            <button id="editar" class="botonT tEditar" value="<?php echo $f_consulta['id_libro']; ?>">Editar</button>
            <button id="borrar" class="botonT" value="<?php echo $f_consulta['id_libro']; ?>">Borrar</button>
          </td>
        </tr>

      <?php endwhile; ?>

    </tbody>

  </table>
  <?php 
}
mostrar_tabla();
?>