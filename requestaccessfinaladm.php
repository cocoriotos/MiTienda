<!--  Developed by julián González Bucheli,  -->
<html lang="us"> <!-- Page language-->

	<head>	
		  <meta charset="iso-8559-1"/>
		  <meta name="Description" content="Top Channel Tracker Tool"/> 
		  <meta name="keywords" content="Top Channel Tracker Tool"/(>
		  <title>Mi Tienda | - Julian Gonzalez Bucheli</title>  <!-- page tab title-->
		  <link rel="stylesheet" href="style_sheet.css"/> <!-- styles framework, template and Fonts-->		  
	</head>
	<header>
		<HR id="HR"/>	<!-- Header title  --> <!-- -->
			<center><h1><font color="#E1EAF7">Mi Tienda | Requerimiento de Acceso para Dueños de Tiendas</font></h1></center>
		<HR/>
	</header>
	<body>		
	  		<form id="login" action="tiendaaccessfinal.php" method="POST" autocomplete="off"> <!-- Form to send access email request login  application admin-->
			<center><font color=lightblue id="form_title"><strong>Formato de Requerimiento de Acceso</strong></center></font><br>	
			  <div class="inputdata">
		        <font color="white" id="form_title1"><strong>Name</strong></font><!-- Requester information for access  -->
				<input id="username" type="text" name="Name" placeholder="Type Your name" required><br> 
				<font color="white"id="form_title1"><strong>Last Name</strong></font>
				<input id="username" type="text" name="LastName" placeholder="Type Your last name" required><br>
				<font color="white"id="form_title1"><strong>You Reports To</strong></font>
				<input id="username" type="text" name="ReportsTo" placeholder="Type Your Manager Name" required><br>
				<font color="white" id="form_title1"><strong>Your Email</strong></font>
				<input id="username" type="text" name="Email" placeholder="Type Your email" required><br>
				<font color="white"id="form_title1"><strong>Your Region</strong></font>
				<input id="username" type="text" name="region" placeholder="Type Your Region" required><br>
				<font color="white"id="form_title1"><strong>Subregion You Attend</strong></font>
				<input id="username" type="text" name="subregion" placeholder="Type Your Subregion" required><br>
				<font color="white" id="form_title1"><strong>Country where you live</strong></font>
				<input id="username" type="text" name="Country" placeholder="Type Your Country" required><br>
				<font color="white" id="form_title1"><strong>City where you live</strong></font>
				<input id="username" type="text" name="City" placeholder="Type Your City" required><br>
				<font id= "form_title1" color="white"><strong>Password</strong></font>
				<input id="username" type="password" name="password1" placeholder="Type Your new password" required ><br>
			</div>
			<center><input id="requestaccess" type="submit" value="Submit"></center>
		</form>
		<form id="login" action="TopChannelTrackerFinal.php" method="POST"> <!-- Form to send access email request login  application admin-->
			<center>
				<input id="cancelbutton" action="TopChannelTrackerFinal.php" type="submit" value="Cancel">
			</center>
		</form>
		<footer id="contact">
				<hgroup>
					<h6 align="center"><address><strong>Web Admin:</strong> Julian Gonzalez Bucheli</address></h6>
					<h6 align="center"><address><strong>Email:</strong>cocoriotos@hotmail.com</address></h6>
					<h6 align="center"><address><strong>Phone:</strong>(+57) 305 429 31 85</address></h6>
					<h6 align="center"><address><strong>Pereira - Colombia </strong></address></h6>
					<h6 time align="center" datetime="2021/4/1" pubdate>Published on Date: 01/04/2021 - WEB Page available: Monday to Friday  8 a.m.to 17 p.m.</time></h6> <!-- Publication format layout-->
				</hgroup>
		</footer>
	</body>
</html>