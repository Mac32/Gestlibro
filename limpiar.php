<?php
/**
 * Función encargada de limpiar el texto ingresado para realizar la consulta a la base de datos.
 * @param  [type = texto] $texto [Cadena de texto a limpiar]
 * @return [type = texto] $texto [Cadena de texto limpia]
 */
function limpiar_sql($texto){
    if (get_magic_quotes_gpc()) { //Obtiene el valor actual de configuración de magic_quotes_gpc
      $texto = trim($texto); //Elimina espacios extra, pestaña, nueva línea de los datos de entrada del usuario
      $texto = stripslashes($texto); // quita barras \ de un string
      $texto = htmlspecialchars($texto);
    }
    if (!is_numeric($texto)) { //Quita secuencias de escape peligrosas
      $texto = "'".mysql_real_escape_string($texto)."'";
    }
    return $texto;
  }

?>