<?php
require_once "comprobar_in.php";
require_once "header.php";
?>


<div class="contenedor">
  <div class="login _50 _40">

    <header>
      <h3>Registro</h3>
    </header>

    <form id="form-registro">

      <div class="campo-formulario">
        <label for="usuario">Usuario:</label> 
        <input type="text" name="usuario" id="usuarioR"  max="20" required />
        <span id="msj_usuario"></span>
      </div>

      <div class="campo-formulario">
        <label for="nombre">Nombre:</label> 
        <input type="text" name="nombre" id="nombre"  max="20" required/>
      </div>

      <div class="campo-formulario">
        <label for="apellido">Apellido:</label> 
        <input type="text" name="apellido" id="apellido"  max="20" required />
      </div>

      <div class="campo-formulario">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" min="8" max="20" required /> 
      </div>

      <div class="campo-formulario">
        <label for="c_password">Confirmar contraseña:</label>
        <input type="password" name="c_password" id="c_password"  min="8" max="20" required /> 
        <span id="msj_contraseña"></span>
      </div>

      <div class="campo-formulario">
        <label for="h">Sexo:</label> 

        <div id="sexo">

          <label for="h" class="sexoR">H</label>
          <input type="radio" name="sexo" id="h" value="H" class="sexoR" required/>

          <label for="m" class="sexoR">M</label>
          <input type="radio" name="sexo" id="m" value="M" class="sexoR" required/>
        </div>
      </div>

      <div class="campo-formulario">
        <label for="f_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="f_nacimiento" id="f_nacimiento" min="01/01/1900" required />
      </div>

      <div class="campo-formulario">
        <button type="button" class="boton" id="registrar">Registrar</button>
      </div>
      <span id="error"></span>

    </form>
  </div>

  <div class="login-imagen _50 _60">
    <img alt="Imagen de libros" src="img/back2.jpg" />
  </div>

</div>

<?php
require_once "footer.php";
?>