<?php 

require_once "comprobar_in.php";
require_once "conexion.php";

?>

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

      <?php 
    }

    $conexion->close();

    ?>
  </ul>
</div>

