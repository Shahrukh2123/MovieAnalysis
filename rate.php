
<html>


<?php
session_start(); 
if(!isset($_SESSION['username'])){
	include("headimdbfinal.php");
	}
	else
	{include("headimdbfinalal.php");
	
	}

include 'db.php';

?>
<body style="margin:0px; " bgcolor='orange' width="100%" height="100%" align="center">
<div id="main" style=" background-color=#007acc ;">

<div id="top">

	<?php
	//session_start(); 
	if(!isset($_SESSION['username'])){
	include("header.php");
	}
	else
	{include("headeral.php");
	
	}	
	?>
	 
</div>
<?php
if(isset($_POST['mname']))
{
	$_SESSION['moname']=$_POST['mname'];
	header("location:movie.php");
	
	
}

?>

<div id="mid" >
<table  border=0 id='table1' align="center">
    
	<form method="post" action="">
	<tr>    
	<td><h2><center>Enter Movie Name to Rate</center></h2></td>
	</tr>
	<tr>    
	<td align="center"><input type="text" name="mname" /></td>
	</tr>
    <tr>
	<td align="center" ><input type="submit" value="search this movie" name="submit" /></td>
	</tr>
	</form>
	
  </table>

</div>


<div id="bottom">

</div>





</div>

</body>
</html>
