<!--Developed by julian Gonzalez -->
<?php
  $db_host="localhost:3307";
  $db_user="root";
  $db_pass="P@ssw0rd123456789";
  $db_name="tiendas";
  $conn=mysqli_connect($db_host,$db_user,$db_pass);
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{
			echo "No hubo conexión, por favor intentarlo nuevamente";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			exit();/*Break php file and next lines*/
			}
  mysqli_select_db($conn,$db_name) or die ("No hay conexión  Disponible");/*database is not available*/			
  /*mysqli_set_charset($conexion,"utf8");/*to display  correct latin america characters */
  if ($conn==true)
			  {
			  echo "<center>Felicitaciones! Acaba de conectarse Exitosamente</center>";
			  echo "<br>";	
			 
			  }
?>
