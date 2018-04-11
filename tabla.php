<?php


require_once "comprobar_in.php";
require_once "conexion.php";

?>
<table>
  <thead> 
    <tr>
      <th>Nombre</th>
      <th>Autor</th>
      <th>Estado</th>
      <th>Código</th>
      <th>Editorial</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>

    <?php
    if((int)isset($_GET["pag"])){
      $pag = $_GET["pag"];
    }else{
      $pag = 0;
    }
    $Mostrar = 5;

    $consultavistas = "SELECT * FROM libros ORDER BY id_libro ASC LIMIT ".$pag." , ".$Mostrar;

// Realizamos la consulta a la base de datos
    $qlibro = $conexion->query($consultavistas);
    while($f_consulta = $qlibro->fetch_array()): 
      ?>

      <tr id="fila">
        <td id="Tnombre"><?php echo $f_consulta["nombre"] ?></td>
        <td id="Tautor"><?php echo $f_consulta["autor"] ?></td>
        <td id="Testado"><?php echo $f_consulta["estado"] ?></td>
        <td id="Tcodigo"><?php echo $f_consulta["codigo"] ?></td>
        <td id="Teditorial"><?php echo $f_consulta["editorial"] ?></td>
        <td id="acciones">
          <button id="asignar" class="botonT" value="<?php echo $f_consulta['id_libro']; ?>">Asignar</button>
          <button id="editar" class="botonT tEditar" value="<?php echo $f_consulta['id_libro']; ?>">Editar</button>
          <button id="borrar" class="botonT" value="<?php echo $f_consulta['id_libro']; ?>">Borrar</button>
        </td>
      </tr>

    <?php endwhile; ?>

  </tbody>
</table>
