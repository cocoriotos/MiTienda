<?php /*Developed by julián González Bucheli*/
		include 'db_connection1.php';
		
		$tiendanameprovider = $_POST['tiendanameprovider'];
		$tiendanitprovider = $_POST['tiendanitprovider'];
		$tiendacontactname = $_POST['tiendacontactname'];
		$tiendaprovideremail = $_POST['tiendaprovideremail'];
		$tiendacountrycode = $_POST['tiendacountrycode'];
		$tiendaprovidermovil = $_POST['tiendaprovidermovil'];
		$tiendacountry = $_POST['tiendacountry'];
		$tiendacity = $_POST['tiendacity'];
		$tiendaalternatecontactname = $_POST['tiendaalternatecontactname'];
		$tiendaprovideralteranteemail = $_POST['tiendaprovideralteranteemail'];
		$tiendaprovideralternatemovil = $_POST['tiendaprovideralternatemovil'];
		$tiendaname = $_GET['tiendaname'];

		
		$sqladd = "INSERT INTO tiendaproviders (providername, provideridentification, contactname, contactemail, countrycode, contactphonenumber, country, city, alternatecontact, alternateemail, alternatephone, tiendaname) VALUES ('$tiendanameprovider', '$tiendanitprovider', '$tiendacontactname', '$tiendaprovideremail', '$tiendacountrycode', '$tiendaprovidermovil',  '$tiendacountry', '$tiendacity', '$tiendaalternatecontactname', '$tiendaprovideralteranteemail', '$tiendaprovideralternatemovil', '$tiendaname')"; 	
		$query_run = mysqli_query($conn,$sqladd); 
		
		if ($query_run){
		echo '<script type="text/javascript"> alert("Data Saved") </script>';
		}
		else
		{
		print_r ($tiendanameprovider);
		print_r ($tiendanitprovider);
		print_r ($tiendacontactname);
		print_r ($tiendaprovideremail);
		print_r ($tiendacountrycode);
		print_r ($tiendaprovidermovil);
		print_r ($tiendacountry);
		print_r ($tiendacity);
		print_r ($tiendaalternatecontactname);
		print_r ($tiendaprovideralteranteemail);
		print_r ($tiendaprovideralternatemovil);
		print_r ($tiendaname);
		echo '<script type="text/javascript"> alert("Data No Saved") </script>';
		}
	?>
		
 
    <?php 
	   header("refresh:1; url=TiendaAdminModule.php");/*wait 7 second and refresh Admin menu page */
	?>