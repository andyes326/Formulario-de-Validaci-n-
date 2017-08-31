<?php
	class conexion{
		function recuperarDatos(){
      //Variables para Conexion
      $host = "localhost";
			$user = "root";
			$pw = "";
			$db = "practisisdb";
      //Conexion con DB y Query
			$con = mysqli_connect($host, $user, $pw, $db) or die("No se pudo conectar a la base de datos ");
			$query = "SELECT * FROM datos";
			$resultado = mysqli_query($con,$query);
      //Ciclo para Publicar datos
			while ($fila = mysqli_fetch_array($resultado)) {
			echo " <tr>";
			echo "ID=<td> $fila[ID]</td> |
              Usuario = <td>$fila[usuario]</td> |
              Nombre = <td>$fila[nombre]</td> |
              Apellido = <td>$fila[apellido]</td> |
              Cedula = <td>$fila[cedula]</td> |
              eMail = <td>$fila[mail]</td><br>";
				echo " </tr> ";
			}

		}
	}
?>
