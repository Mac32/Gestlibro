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


});