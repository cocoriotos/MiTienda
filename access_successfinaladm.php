<html>

<?php /*Developed by julián González Bucheli*/

//Defining local procedure variables and assigning POST form values into
	$username=$_POST['username'];
	$password=$_POST['password1'];


	
	if($_POST)
 {
  $db_host="localhost:3307";
  $db_user="root";
  $db_pass="P@ssw0rd123456789";
  $db_name="appsdb";
  //$username=$_POST['username'];
  $conn=mysqli_connect($db_host,$db_user,$db_pass);/*$conn store the parameter information */
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{	
			/*alert("ALERT: DB not connected");*/
			include("No_DB_Connectionfinal.php");
			include ("mitiendaadmlogin.php");
			exit();/*Break php file and next lines*/
			}
  mysqli_select_db($conn,$db_name) or die ("<center>There is not Database available</center>");/*database is not available*/			

  if ($conn==true)
		{

		}

		$insert="update accesslistmitiendaadm SET visits=visits+1 where (username='$username' and password='$password')"; /*username Vistit counter increas in 1*/
        $result=mysqli_query($conn, $insert);
		$query1="select * from accesslistmitiendaadm where username='$username' and active='1' and role='user' and password='$password'"; /*if username is user role*/
		$result1=mysqli_query($conn, $query1);
		$query2="select * from accesslistmitiendaadm where username='$username' and active='1' and role='admin' and password='$password'"; /*if username is admin role*/
		$result2=mysqli_query($conn, $query2);


		
		if(mysqli_num_rows($result1)==true)
			{	
			include("livraria_admin.php");
			exit();	
			}
		else 
		{
			if(mysqli_num_rows($result2)==true)
		    	{	
			     include ("livraria_admin.php");
			     exit();	
			   } else{
			include ("access_not_successfinal.php");
			}
		}
		
 }
 
 /*mysqli_close($conn);*/
?>
	
	
</html>
