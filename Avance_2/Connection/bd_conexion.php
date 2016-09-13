<?php
  // Conectando, seleccionando la base de datos
  $link = mysql_connect('localhost', 'root', '')
      or die(
        '<div class="alert-warning text-uppercase text-center statusBD"><h1>No se pudo conectar: </h1></div>' . mysql_error());
  //echo '<div class="alert alert-success text-uppercase text-center"><strong>Coreecto!</strong>Conexi&oacute;n Exitosa</div>';
  mysql_select_db('BD_Million') or die('<div class="text-warning text-uppercase text-center"><h1>No se pudo seleccionar la base de datos</h1></div>');

  // Realizar una consulta MySQL
  $query = 'SELECT nombre_h FROM nombres_h';
  $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

  $query1 = 'SELECT apellido FROM apellidos';
  $result1 = mysql_query($query1) or die('Consulta1 Fallida' .mysql_error());

  // Imprimir los resultados en HTML
  /*echo "<select>\n";
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      echo "\t<option>\n";
      foreach ($line as $col_value) {
          echo "\t\t$col_value\n";
      }
    echo "\t</option>\n";
  }
  echo "</select>\n";

  echo "<select>\n";
  while ($line1 = mysql_fetch_array($result1, MYSQL_ASSOC)) {
      echo "\t<option>\n";
      foreach ($line1 as $col_value1) {
          echo "\t\t$col_value1\n";
      }
    echo "\t</option>\n";
  }
  echo "</select>\n";

  // Liberar resultados
  mysql_free_result($result);

  // Cerrar la conexión
  mysql_close($link);*/
  
?>
