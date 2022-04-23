
<html><?php
session_start(); 
if(!isset($_SESSION['username'])){
	include("headimdbfinal.php");
}
else
	{include("headimdbfinalal.php");

}


?>
<body style="margin:0px; " bgcolor='orange' width="100%" height="100%" align="center">
	<div id="main">

		<div id="top">
			<?php
	//session_start(); 
			if(!isset($_SESSION['username'])){
				include("header.php");
			}
			else
				{
					include("headeral.php");
			
		}	
		?>	 
	</div>


	<div id="mid"  align="center">



		<form name="form1" method="post" action="">

			<H1></H1>
			<table  border=0 id='table1'>
				<tr>
					<td>&emsp;<b>Enter your Username:</b></td>
					<td><input type="text" name="username"  id="txt1"/></td>
				</tr>
				<tr>
					<td>&emsp;<b>Enter your Password:</b></td>
					<td><input type="password" name="password" id="txt2"/></td>
				</tr>
				<tr>
					
					<td align="center" colspan="2"><input type="submit" name="submit" value="Log In" /></td>
					<td align="right"><a href="fogot.php">Forgot Password?</a>
				</tr>
			</table>
		</form>
		<?php


		include 'db.php';
//session_start(); 

		if (isset($_POST['submit']))
		{      

			$username=($_POST['username']);
			$password=($_POST['password']);
			$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo"login done";
					$_SESSION["username"] = $username;
  //header("location:afterlogin.php");
					header("location:imdbfinal.php");
					
				}
				else{
					header("location:login.php");
					
				}
			}
		}
		?>

	</div>

	<div id="bottom">
		
		</div>

	</div>

</body>
</html>
