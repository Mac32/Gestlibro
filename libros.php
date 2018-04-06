<?php

require_once "comprobar_in.php";
require_once "conexion.php";
require_once "header.php";

?>
<body>

  <main class="contenedor">

    <section id="reg_libro">

      <header>
        <h3>Registrar libro</h3>
      </header>

      <form>

        <div class="campo-formulario">
          <label for="nombre">Nombre:</label>
          <input type="text" maxlength="50" name="nombre" id="nombre" required />
        </div>

        <div class="campo-formulario">
          <label for="autor">Autor:</label>
          <input type="text" maxlength="50" name="autor" id="autor" required />
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
          <label for="editorial">Uso:</label>
          <input type="text" maxlength="50" name="uso" id="uso" required />
        </div>

        <div class="campo-formulario">
          <button type="button" class="boton">Registrar</button>
        </div>
      </form>
    </section>

    <section id="contenedor_tabla">

      <div id="c_buscar">
        <input type="text" id="buscar" />
        <button class="botonB boton">Buscar</button>
      </div>

      <div id="pnl_tabla">
        <div id="tabla">
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
              $qlibro = $conexion->query("SELECT * FROM libros");
              while($f_consulta = $qlibro->fetch_array()): 
                ?>

                <tr>
                  <td><?php echo $f_consulta["nombre"] ?></td>
                  <td><?php echo $f_consulta["autor"] ?></td>
                  <td><?php echo $f_consulta["codigo"] ?></td>
                  <td><?php echo $f_consulta["estado"] ?></td>
                  <td><?php echo $f_consulta["usado"] ?></td>
                  <td>
                    <button id="asignar" class="botonT">Asignar</button>
                    <button id="editar" class="botonT">Editar</button>
                    <button id="borrar" class="botonT">Borrar</button>
                  </td>
                  </tr>

                <?php endwhile; ?>

              </tbody>

            </table>
          </div>
        </div>

      </section>

    </main>
  </body>