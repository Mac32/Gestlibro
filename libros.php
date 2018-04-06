<?php

require_once "comprobar_in.php";
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

          <div id="estado">

            <label for="radio">Disponible</label>
            <input type="radio" maxlength="50" name="estado" id="estado" required value="Disponible" />

            <label for="radio">No disponible</label>
            <input type="radio" maxlength="50" name="estado" id="estado" value="No disponible" required />
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
          <label for="editorial">Editorial:</label>
          <input type="text" maxlength="50" name="editorial" id="editorial" required />
        </div>

        <div class="campo-formulario">
          <button type="button" id="boton">Registrar</button>
        </div>
      </form>
    </section>
  </main>
</body>