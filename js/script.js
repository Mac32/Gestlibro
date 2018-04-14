$(function(){

  //Login

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
  $true = $("<span class=\"true\"> Los contraseñas coinsiden</span>");
  $false = $("<span class=\"false\">Los contraseñas no coinsiden. Por favor introduzcala nuevamente</span>");

  if ($("#c_password").val() != "") {
    if($("#password").val() == $("#c_password").val()){
      $true.appendTo($("#msj_contraseña"));
    }else{
      $false.appendTo($("#msj_contraseña"));
    }

  }



})


//Registrar usuario

/**
 * 
 * OJO: Terminar registro
 */
 function registro(){


  $("#form-registro").serialize();

}

$("#registrar").on("click", registro);

///////////////////////////
// Registrar nuevo libro //
///////////////////////////

//Comprobar código en la base de datos en el registro

$("#contenido").on("focusout", "#codigo",function(){
  $("#msj_codigo").html("");
  $true = $("<span class=\"true\">Aprobado</span>");
  $false = $("<span class=\"false\">Este código ya está asignado</span>");
  $carga = $("<img src=\"img/cargaH.svg\" />");

  $codigo = $("#codigo").val();
  if ($codigo != "") {
    $carga.appendTo($("#msj_codigo"));
    $.get("validar_codigo.php", {codigo: $codigo},
      function(result){
        if (result == "valido") {
          $carga.remove();
          $true.appendTo($("#msj_codigo"));
        }else{
          $carga.remove();
          $false.appendTo($("#msj_codigo"));
        }
      });
  }
});

//Comprobar código en la base de datos de edición

$("#contenido").on("focusout", "#Ecodigo",function(){
  $("#Emsj_codigo").html("");
  $true = $("<span class=\"true\">Aprobado</span>");
  $false = $("<span class=\"false\">Este código ya está asignado</span>");
  $carga = $("<img src=\"img/cargaH.svg\" />");

  $codigo = $("#Ecodigo").val();
  if ($codigo != "") {
    $carga.appendTo($("#Emsj_codigo"));
    $.get("validar_codigo.php", {codigo: $codigo},
      function(result){
        if (result == "valido") {
          $carga.remove();
          $true.appendTo($("#Emsj_codigo"));
        }else{
          $carga.remove();
          $false.appendTo($("#Emsj_codigo"));
        }
      });
  }
});


//Evento registrar libro
$("#contenido").on("click", "#btn_registrar_libro", function(){

  if ($("#msj_codigo span").html() == "Aprobado") {
    $formulario = $("#frm_reg_lib").serialize();
    $.post("registrar_libro.php", $formulario, function(result){
      if (result == "exitoso") {
        alert("El libro se agregó correctamente");
        $("#frm_reg_lib")[0].reset();
        $("#pnl_tabla").load("pnl_tabla.php");
      }else if (result == "error") {
        alert("Hubo un problema al registrar el libro");
      }else if (result == "vacio") {
        alert("Debe llenar todos los campos");
      }
    });

  }else{
    alert("Debe ingresar un código válido");
  }
});


/////////////////
//Editar libro //
/////////////////

$("#contenido").on("click","#editar", function(){
  var id_libro = $(this).val();
  $("#edi_libro").load("pnl_editar_libro.php?id_libro="+id_libro);
});

////////////////////////
//Barra de navegación //
////////////////////////


$(".nav").on("click", "#home", function(e){
  e.preventDefault();
  $("#home").removeClass("boton_nav");
  $("#home").addClass("activa");
  $("#libros, #registros").removeClass("activa");
  $("#libros, #registros").addClass("boton_nav");
});

$(".nav").on("click","#libros",function(e){
  e.preventDefault();
  $("#libros").removeClass("boton_nav");
  $("#libros").addClass("activa");
  $("#home, #registros").removeClass("activa");
  $("#home, #registros").addClass("boton_nav");
  $("#contenido").load("libros.php");
});

$(".nav").on("click", "#registros",function(e){
  e.preventDefault();
  $("#registros").removeClass("boton_nav");
  $("#registros").addClass("activa");
  $("#home, #libros").removeClass("activa");
  $("#home, #libros").addClass("boton_nav");
  $("#contenido").load("registros.php");
});

 /**
  * Mostrar panel para registrar libro
  */

  $("#contenido").on("click", "#registrarL", function(e){
    e.preventDefault();
    $("#reg_libro").slideToggle("1000");
  });

///////////////
//Paginación //
///////////////

$("#contenido").on("click", ".btn_pag", function(){
  var valor = ($(this).attr("value")-1)*5;
  $("#tabla").load("tabla.php?pag="+valor);
});

$("#contenido").on("click", "#borrar", function(){

  if (confirm("Desea eliminar el libro?")) {
    $id_libro = $(this).val();
    $.post("borrar_libro.php", {id_libro: $id_libro}, function(result){
      if (result == "exitoso") {
        alert("Se ha borrado el libro");
        $("#pnl_tabla").load("pnl_tabla.php");
      }else{
        alert("A ocurrido un problema (no se borro el libro)");
      }
    });
  }

});


});