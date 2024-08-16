<html lang="us"> <!-- Page language-->
	<head>	
		  <meta charset="iso-8559-1"/>
		  <meta name="Description" content="Partner Tracker Tool"/> 
		  <meta name="keywords" content="Partner Tracker Tool"/>
		  <title>Mi Tienda</title>  <!-- page tab title-->
		  <link rel="stylesheet" href="style_sheet.css"/> <!-- styles framework, template and Fonts-->
		  <?php 

		?>
	</head>
	<header>
		<HR id="HR"/>	<!-- Header title  --> <!-- -->
			<center><h1><font  color="#E1EAF7">Mi Tienda | Modulo Administracion </font></h1></center>
		<HR/>
	</header>	
	  <body>
		<form id="login" action="access_successfinaladm.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			    <center><font color=lightblue id="form_title"><strong>Autenticación para la aplicacion</strong></font></center><br>	
                <center><img id="img_login" center SRC="accessicon.png"></img></center></br> <!-- Login Icon  -->
				<div class="inputdata1">
					<center><font id= "form_title" color="white"><strong>Usuario</strong></font></center><br>
					<center><input id="username1" type="text" name="username"  placeholder="Nombre de Usuario registrado" required ></center><br> <!-- Login   -->
				<br>
				</div >
				<div class="inputdata1">
					<center><font id= "form_title" color="white"><strong>Contraseña</strong></font></center><br>
					<center><input id="username1" type="password" name="password1" required ></center><br> <!-- Login   -->
				<br>
				</div >
				<center><input id="loginbutton" type="submit" value="Ingresar"></center>
		</form>
		<form id="login" action="requestaccessfinal.php" method="POST" autocomplete="off"> <!-- Form to request access-->
			<center>
				<h6 id="access" align="center"><address><strong>Sin Acceso?, Por favor solicitarlo aquí</strong> </address></h6><br>
				<input id="requestaccess" type="submit" value="Solicitar Acceso"><br>
			</center>
		</form>
		<footer id="contact">
				<hgroup>
					<h6 align="center"><address><strong>Web Admin:</strong> Julian Gonzalez Bucheli</address></h6>
					<h6 align="center"><address><strong>Email:</strong>cocoriotos@hotmail.com</address></h6>
					<h6 align="center"><address><strong>Celular:</strong>(+57) 305 429 31 85 </address></h6>
					<h6 align="center"><address><strong>Pereira - Colombia </strong></address></h6>
					<h6 time align="center" datetime="2024/2/1" pubdate>Published on Date: 01/04/2021 - WEB Page available: Monday to Friday  8 a.m. to 5 p.m.</time></h6> <!-- Publication format layout-->
				</hgroup>
		</footer>
	</body>
</html>