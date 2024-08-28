<?php /*Developed by julián González Bucheli*/
		include 'db_connection1.php';
	
		$tiendaproduct = $_POST['tiendanameprovider'];
		$tiendasubproduct = $_POST['tiendanitprovider'];
		$marcaproducto = $_POST['tiendacontactname'];
		$cantidadsolicitada = $_POST['tiendaprovideremail'];
		$medidaproducto = $_POST['tiendacountrycode'];
		$fechavencimiento = $_POST['tiendaprovidermovil'];
		$tiendaname = $_GET['tiendaname'];

		
		$sqladd = "INSERT INTO tiendaaddtoinventario (tiendaproduct, tiendasubproduct, marcaproducto, cantidadsolicitada, medidaproducto, fechavencimiento, tiendaname) VALUES ('$tiendaproduct', '$tiendasubproduct', '$marcaproducto', '$cantidadsolicitada', '$medidaproducto', '$fechavencimiento', '$tiendaname')"; 	
		$query_run = mysqli_query($conn,$sqladd); 
		
		if ($query_run){
		echo '<script type="text/javascript"> alert("Data Saved") </script>';
		}
		else
		{
		print_r ($tiendaproduct);
		print_r ($tiendasubproduct);
		print_r ($marcaproducto);
		print_r ($cantidadsolicitada);
		print_r ($medidaproducto);
		print_r ($fechavencimiento);
		print_r ($tiendaname);
		echo '<script type="text/javascript"> alert("Data No Saved") </script>';
		}
	?>
		
 
    <?php 
	   header("refresh:1; url=TiendaAdminModule.php");/*wait 7 second and refresh Admin menu page */
	?>