<?php 
	
	$valueCol = $_GET['Cols'];
	
	$i = 1;
  echo "<form class='form-signin' id='cantCampos' name='cantCampos'>
            <tr class='active'>
              <td></td>
              <td>Nombre columna</td>
              <td>Tipo de Dato</td>
              <td>Descripcion</td>
              <td>Longitud</td>
              <td>Eliminar</td>
            </tr>";
	while ( $i<= $valueCol) {
		echo "
          <tr class='Active'>
		        <td></td>
            <td><input type='text' class='form-control' id='namesCols' name='namesCols'></td>
            <td>
              <select class='form-control'> 
                <option>Selecctione Tipo de Dato</option>
                <optgroup label='Númericos'>
                  <option>Auto_Increment (1, 2, 3, 4, 5...)</option>
                  <option>Int (No.Tel, No.Cuenta, No.Aleatorio, etc..)</option>
                  <option>Double (0.1, 1.1, 2.1, etc..)</option>
                </optgroup>
                <optgroup label='Alfanúmericos'>
                  <option>Varchar (Alfanúmericos)</option>
                  <option>String (Nombre, Apellidos, )</option>
                </optgroup>
              </select>
            </td>
            <td><input type='text' class='form-control'></td>
            <td><input type='number' class='form-control' placeholder='0 - 255 Caracteres'></td>
            <td><input type='checkbox' class='checkbox'   ></td></tr>";

		$i++;
	}
	echo "</form>";
?>
