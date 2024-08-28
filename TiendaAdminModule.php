
<html>

	<head><!--Data Menu options to get lists from MySLQ, Developed by julian Gonzalez-->
			<?php 
				include 'db_connection1.php';
				##include "sessions.php";
				##$username=$_POST['username'];
				##$tiendaname=$_POST['tiendaname'];
				
				
			?>
			<link rel="stylesheet" href="tab.css">
		
		
			<script>
			function openList(evt, cityName) {
				// Declare all variables
				var i, tabcontent, tablinks;

				// Get all elements with class="tabcontent" and hide them
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}

				// Get all elements with class="tablinks" and remove the class "active"
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}

				// Show the current tab, and add an "active" class to the link that opened the tab
				document.getElementById(cityName).style.display = "block";
				evt.currentTarget.className += " active";
			}
			</script>
		<meta charset="iso-8559-1">
		<meta name="Description" content="Módulo de Administración de Tienda"> 
		<meta name="keywords" content="Administración de Tienda">	  
		<title>Módulo de Administración de Tienda</title><!-- page tab title-->
		
		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>	
		
		<script> $(document).ready( function () {
			$('#autosearch').DataTable();
		} );</script>  <!-- to apply the external file style to the tables-->
		
		

		</head> 
			<?php

			echo "<div align=\"center\"><font size=120% color=black>Bienvenido! Su Perfil es: Administrador </div></font>";

			?>
			<header>
				<hr id="HR">  <!-- Header title  -->
					<center><h1><font color="#5a697f" style="font-family: arial";>Módulo de Administración de Tienda | <?php echo $tiendaname;?> </font></h1></center>
					<form id="mainmenu" action="mitiendaadmlogin.php" method="POST" autocomplete="off" style="padding:12px; width:18%;">
					<input id="maimenubutton" align="right" type="submit" value="Salir" style="font-size:120%; height:5%;">
					</form>
				</hr>
			</header>
		<body>
			<?php

			?>

		<ul class="tab">
			
			<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminProviders')">| Adminitración de Proveedores |</a></li>
			<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminAssets')">Administración de inventarios |</a></li>
			<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminAssets1')">Administración de Operaciones y Ventas  |</a></li>
			<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminAssets2')">Reportes |</a></li>
		</ul>
		
		
		
		<div id="AdminProviders" class="tabcontent">
			<ul class="tab">
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminProvider')">| Adicionar Proveedor |</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminProvidersList')">Listar/Modificar/Eliminar Proveedores |</a></li>					
				</ul>
		</div>
		
		<div id="AdminProvider" class="tabcontent">
			<form id="login" action="addprovider.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
					<center>
						<br>
						<font color=white id="form_title"><strong>Formulario Para Adicionar Proveedor</strong></font><br><br>	
						<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
						<label id= "username1" name="username" color="white"><strong>Nombre del Proveedor</strong></label><br> 
						<input id="username" type="text" name="tiendanameprovider"  placeholder="Nombre del Proveedor" required><br> <br> 
						<label id= "username1" color="white"><strong>NIT o Identificación del proveedor</strong></label><br> 
						<input id="username" type="text" name="tiendanitprovider"  placeholder="NIT o Número de Identificación" required><br> <br> 
						<label id= "username1" color="white"><strong>Nombre Del Contacto Principal</strong></label><br> 
						<input id="username" type="text" name="tiendacontactname"  placeholder="Contacto" required><br> <br> 
						<label id= "username1" color="white"><strong>Email Contacto Principal</strong></label><br> 
						<input id="username" type="text" name="tiendaprovideremail"  placeholder="email" required><br> <br> 
						<label id= "username1" color="white"><strong>Código de País</strong></label><br>
						<select name= "tiendacountrycode" required> <?php $SQLSELECT = "SELECT * FROM tiendacountycode"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $tiendacountrycode = $rows['countrycode']; echo "<option value='$tiendacountrycode'>$tiendacountrycode</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Móvil</strong></label><br> 
						<input id="username" type="text" name="tiendaprovidermovil"  placeholder="Número de Móvil" required><br> <br>
						<label id= "username1" color="white"><strong>Country</strong></label><br> 
						<select name= "tiendacountry" required> <?php $SQLSELECT = "SELECT * FROM tiendascountry order by country asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $country = $rows['country']; echo "<option value='$country'>$country</option>";} ?></select> <br><br>
						<label id= "username1" name="addcity" color="white"><strong>City</strong></label><br> 
						<select name= "tiendacity" required> <?php $SQLSELECT = "SELECT * FROM tiendascity order by city asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $city = $rows['city']; echo "<option value='$city'>$city</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Nombre Del Contacto Alterno</strong></label><br> 
						<input id="username" type="text" name="tiendaalternatecontactname"  placeholder="Contacto Alterno" required><br> <br> 
						<label id= "username1" color="white"><strong>Email del Contacto Alterno</strong></label><br> 
						<input id="username" type="text" name="tiendaprovideralteranteemail"  placeholder="email" required><br> <br> 
						<label id= "username1" color="white"><strong>Móvil Del Contacto Alterno</strong></label><br> 
						<input id="username" type="text" name="tiendaprovideralternatemovil"  placeholder="Número de Móvil" required><br> <br>
						<br>
						<input id="loginbutton" name="adduser" type="submit" value="Adicionar Proveedor"> 
					</center>
			</form>
		</div>

        <div id="AdminProvidersList" class="tabcontent">
			<script> $(document).ready( function () {
        	$('#autosearch1').DataTable();
       		} );</script> <!-- to apply the external file style to the tables-->
	        <table id="autosearch1" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Id</th>
								<th>Nombre Proveedor</th>
								<th>Identificación</th>
								<th>Nombre Contacto Principal</th>
								<th>Email</th>
								<th>Código de País</th>
								<th>Número de Móvil</th>
								<th>País</th>
								<th>Ciudad</th>
								<th>Nombre Contacto Alterno</th>
								<th>Email</th>
								<th>Número de Móvil</th>
								<th>Nombre de Tienda Asociada</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM tiendaproviders"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
							  <td align="center" onclick="Display"><?php echo"<a href=emailfinal_modify.php?id={$row['id']}'>{$row['id']}"?></td>	
							  <td align="center"><?php echo $row['providername']; ?></td>
							  <td align="center"><?php echo $row['provideridentification']; ?></td>
							  <td align="center"><?php echo $row['contactname']; ?></td>
							  <td align="center"><?php echo $row['contactemail']; ?></td>	
							  <td align="center"><?php echo $row['countrycode']; ?></td>
							  <td align="center"><?php echo $row['contactphonenumber']; ?></td>
							  <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['city']; ?></td>
							  <td align="center"><?php echo $row['alternatecontact']; ?></td>
							  <td align="center"><?php echo $row['alternateemail']; ?></td>
							  <td align="center"><?php echo $row['alternatephone']; ?></td>
							  <td align="center"><?php echo $row['tiendaname']; ?></td>
                             </tr>	
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	    </div>
		<div id="AdminAssets" class="tabcontent">
			<ul class="tab">
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddAssets')">| Adicionar Productos a Inventario |</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListAssets')">Listar Inventario |</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListalmostdueAssets')">Productos a vencer |</a></li>
					<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListdueAssets')">Productos Vencidos |</a></li>
				</ul>
		</div>
        
        <div id="AddAssets" class="tabcontent">
			<form id="login" action="addassets.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
					<center>
						<br>
						<font color=white id="form_title"><strong>Formulario Para Adicionar Productos a Inventario</strong></font><br><br>	
						<img id="img_login" center SRC="mitienda.png"></img></br></br> <!-- Login Icon  -->
						<label id= "username1" name="username" color="white"><strong>Tipo de Producto</strong></label><br> 
						<select name= "tiendaproduct" required> <?php $SQLSELECT = "SELECT * FROM tiendaproductos"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $tiendaproduct = $rows['product']; echo "<option value='$tiendaproduct'>$tiendaproduct</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Tipo de Subproducto</strong></label><br> 
						<select name= "subproducto" required> <?php $SQLSELECT = "SELECT * FROM tiendasubproductos"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subproducto = $rows['subproducto']; echo "<option value='$subproducto'>$subproducto</option>";} ?></select> <br><br>				
						<label id= "username1" color="white"><strong>Marca Del Producto</strong></label><br> 
						<select name= "marcaproducto" required> <?php $SQLSELECT = "SELECT * FROM tiendasubproductos"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $marcaproducto = $rows['marcaproducto']; echo "<option value='$marcaproducto'>$marcaproducto</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Cantidad a Ingresar al Inventario</strong></label><br> 
						<select name= "cantidad" required> <?php $SQLSELECT = "SELECT * FROM tiendasquantity"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $cantidad = $rows['cantidad']; echo "<option value='$cantidad'>$cantidad</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Medida del Producto</strong></label><br> 
						<select name= "medidaproducto" required> <?php $SQLSELECT = "SELECT * FROM tiendainventario"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $medidaproducto = $rows['medidaproducto']; echo "<option value='$medidaproducto'>$medidaproducto</option>";} ?></select> <br><br>
						<label id= "username1" color="white"><strong>Fecha de Vencimiento del Producto</strong></label><br> 
						<input id="date" type="date" name="duedate" placeholder="YYYY-MM-DD" required><br>				<br>
						<input id="loginbutton" name="adduser" type="submit" value="Adicionar Producto"> 
					</center>
			</form>
		</div>
##----------
		<div id="ListAssets" class="tabcontent">
			<script> $(document).ready( function () {
        	$('#autosearch1').DataTable();
       		} );</script> <!-- to apply the external file style to the tables-->
	        <table id="autosearch1" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Id</th>
								<th>Nombre Proveedor</th>
								<th>Identificación</th>
								<th>Nombre Contacto Principal</th>
								<th>Email</th>
								<th>Código de País</th>
								<th>Número de Móvil</th>
								<th>País</th>
								<th>Ciudad</th>
								<th>Nombre Contacto Alterno</th>
								<th>Email</th>
								<th>Número de Móvil</th>
								<th>Nombre de Tienda Asociada</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM tiendaproviders"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
							  <td align="center" onclick="Display"><?php echo"<a href=emailfinal_modify.php?id={$row['id']}'>{$row['id']}"?></td>	
							  <td align="center"><?php echo $row['providername']; ?></td>
							  <td align="center"><?php echo $row['provideridentification']; ?></td>
							  <td align="center"><?php echo $row['contactname']; ?></td>
							  <td align="center"><?php echo $row['contactemail']; ?></td>	
							  <td align="center"><?php echo $row['countrycode']; ?></td>
							  <td align="center"><?php echo $row['contactphonenumber']; ?></td>
							  <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['city']; ?></td>
							  <td align="center"><?php echo $row['alternatecontact']; ?></td>
							  <td align="center"><?php echo $row['alternateemail']; ?></td>
							  <td align="center"><?php echo $row['alternatephone']; ?></td>
							  <td align="center"><?php echo $row['tiendaname']; ?></td>
                             </tr>	
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	    </div>
		</body>
</html>