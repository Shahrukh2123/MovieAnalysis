<?php
require 'db.php';

if(isset($_POST['username'])){
			$username     =$_POST['username'];
			$sql="SELECT * FROM user WHERE username='".$username."' limit 1";
			$result=mysqli_query($link, $sql);
			$count=mysqli_num_rows($result);
			$row=mysqli_fetch_array($result);
			if($count>0)
			{
				$x= $row['password'];
				echo "<script>alert('your password is : $x');</script>";




			}
			else
			{
				echo "<script>alert('Incorrect Mail id');</script>";
				
			}
}

?>
<html>
<head>
	<style>
	#frmForgot{
		border:2px solid grey;
		background-color: skyblue;
		width:400px;
		height:300px;


	}

		
	</style>
	}


</head>

<body bgcolor="lightgreen">
<br><br><br><br><br>
<center><form name="frmForgot" id="frmForgot" method="post" >
<h1 align="center">Forgot Password?</h1>
	<!-- <?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?> -->
	

	
	<div class="field-group">
		<div><label for="email">Enter Your Username</label></div>
		<div><input type="text" name="username" id="Password" class="input-field" placeholder="Your Username" required></div>
	</div><br><br>
	
	<div class="field-group">
		<div><center><input type="submit" name="submit" id="forgot-password" value="Show Password" class="form-submit-button"></center></div>
	</div>	
</form></center>

</body>
>

</html>