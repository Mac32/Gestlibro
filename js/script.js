$(function(){
  $error = $("Ingrese un Usuario y contraseña");
  $error1 = $("<span style='color: red; display: block; text-align: center; font-weight: bold'>Usuario y/o contraseña incorrecto</span>");
  $loading = $("<img src='img/378.gif' alt='cargando' />");

  function validacion(){
    $("#error").html("");
    $("input").css("border", "1px solid #02c094");
    $error.remove();
    $usuario = $("#usuario").val();
    $password = $("#password").val();
    
    if($usuario == "" && $password == ""){
      $error.appendTo("#error");
      $("#error").css({
        "display": "block",
        "color": "red",
        "text-align": "center",
        "font-weight": "bold"
      });

      $("#error").html("Ingrese Usuario y contraseña");
    }else{
      $loading.appendTo("#error");
      setTimeout(function(){
        $.post('validar.php', {usuario: $usuario, password: $password},
          function(result){
            if (result == "Acceso") {
              window.location = "home.php";
            }else{
              $loading.remove();
              $error1.appendTo("#error");
              $("input").css("border", "2px solid #ff000066");
              $("input").css("outline-color", "#ff000066");
            }
          })
      }, 3000);
    }
  }

//Manejadores de eventos

$("#entrar").on("click",  validacion);
$("#password").keypress(function(e){
  if(e.which == "13"){
    validacion();
  }
});

/**
 * Registro de usuario
 */


//Comprobación de usuario

function comprobar_usuario(){
  $usuario = $("#usuarioR").val();
  $mensaje = $("<img alt='cargando' src='img/cargar2.gif' height='3px' />");
  $msj_aprobado = $("<span style='color:#02c094; display: block; text-align: center; font-weight: bold; padding-top: 0.5em;'>Aprobado</span>");
  if ($usuario != "") {
    $("#msj_usuario").html("");
    $mensaje.appendTo($("#msj_usuario"));
    $.post("validar_usuario.php", {usuario: $usuario}, 
      function(result){
        if (result == "aprobado") {
          $mensaje.remove();
          $("#msj_usuario").html("");
          $msj_aprobado.appendTo($("#msj_usuario"));
        }else{
          $mensaje.remove();
          $("<span style='color:red; display: block; text-align: center; font-weight: bold; padding-top: 0.5em;'>Este nombre de usuario ya existe, por favor intente con otro</span>").appendTo($("#msj_usuario"));
        }
      } );
  }
} //fin de comprobar usuario

$("#usuarioR").focusout(comprobar_usuario);



//Comprobación de coinsidencia de contraseña

$("#password, #c_password").focusout(function(){
  $("#msj_contraseña").html("");
  $true = $("<span style='color:#02c094; display: block; text-align: center; font-weight: bold; padding-top: 0.5em;'> Los contraseñas coinsiden</span>");
  $false = $("<span style='color:red; display: block; text-align: center; font-weight: bold; padding-top: 0.5em;'>Los contraseñas no coinsiden. Por favor introduzcala nuevamente</span>");

  if ($("#c_password").val() != "") {
    if($("#password").val() == $("#c_password").val()){
      $true.appendTo($("#msj_contraseña"));
    }else{
      $false.appendTo($("#msj_contraseña"));
    }

  }



})


//registrar

function registro(){


  $("#form-registro").serialize();

}

$("#f_nacimiento").on("click", registro);

});