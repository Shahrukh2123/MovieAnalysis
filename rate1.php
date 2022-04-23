
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


<div id="mid" >
<?php
// define variables and set to empty values
$Err= "";
$flag=0;
if ( isset($_POST['submit1']) or isset($_POST['submit2']))	{
	
$_SESSION['mid']=$_POST['mid'];

if (isset($_POST['oldrate']))
$_SESSION['oldrate']=$_POST['oldrate'];

 $_SESSION['newrate']=$_POST['newrate'];	
if(isset($_POST['submit1'])){
	$_SESSION['submit1']=1;
	$_SESSION['submit2']=0;
	}
else if(isset($_POST['submit2']))
{
	$_SESSION['submit2']=1;
	$_SESSION['submit1']=0;
	
}

	$r=$_POST['newrate'];
	if (empty($_POST["newrate"])) {
     $Err = "* Input is required";
	 $flag=1;
   } else {
     if ($r>=0 and $r<=10) {}
	 
	 else if ($r<0 or $r>10){
       $Err = "* Invalid Input";
	   $flag=1;
     }
   }
   if($flag==0)
	   header("location:sql.php");
   else
	      header($_SERVER['PHP_SELF']);
   
}
?>

    <?php
	$mid=$_POST['mid'];

	$sql = "SELECT  *
			FROM movie as m 
			join rating as ra on m.id=ra.id   
			where  m.id='$mid'";
				if($result = mysqli_query($link, $sql))
				{
					if(mysqli_num_rows($result) >0 )
					{
						$row= mysqli_fetch_array($result);
							echo"<br>";
							echo"<table  border=0 align='center' width='80%' id='table1'><col width='250'><col width='200'><col width='200'><col width='200'>";
							$image='m1/';
							$image.=$row['id'];
							$image.='.jpg';
							echo "<tr><td id='font1' rowspan='5' align='center' >";
							echo'<img src="'.$image .'" height=320px width=270px/>';
							echo "</td></tr>";
							echo "<tr><td id='font1'>"."Movie-Name:"."</td><td id='font1'>" . $row['name'] . "</td>";
							 $uname=$_SESSION['username'];
							echo "<td id='font1' rowspan='4' align='center'>"; 
							
							$sql1 = "SELECT * from userrating as u  where u.mid='$mid' and u.username='$uname'";
							if($result1 = mysqli_query($link, $sql1))//check and execute query..
							{
								if(mysqli_num_rows($result1)>0)
								{
									$row1 = mysqli_fetch_array($result1);
									$oldrate=$row1['rate'];
									//$mid=$row['id'];
									echo"<span class='error'><h3 >* You have already <br>rated this <br>movie as : ". $row1['rate']."</h2></span>";									
									
									//$Err="sfaasf";
									?>
									<form method="post" action="" >
									<a id='font1'>Enter Your &nbsp &nbsp &nbsp &nbsp &nbsp<br>Rating Here :</a>
									
									<input type="text" name="newrate"  style="width:40px;"/>
									<a id='font1'> <br>(from 0 to 10)&nbsp &nbsp &nbsp &nbsp &nbsp </a>
													
									<input type='hidden' name='oldrate' value='<?php echo $oldrate ?>'>
									<input type='hidden' name='mid' value='<?php echo $mid ?>'>
									<br><span class="error"> <?php echo $Err;?></span>
									<br>
									<button type='submit'   name='submit1'  >
									<?php 
									
									echo"<font  FACE='Geneva, Arial' SIZE=5 id='mybutton' >Rate  again</font></button ><br><br>";
									echo "</form>";
												
																				
								}
								else{
									?>
									<form method="post"  action=''>
									<a id='font1'>Enter Your &nbsp &nbsp &nbsp &nbsp &nbsp<br>Rating Here :</a>
									
									<input type="text" name="newrate"  style="width:40px;"/>
									<a id='font1'> <br>(from 1 to 10)&nbsp &nbsp &nbsp &nbsp &nbsp</a>
									<input type='hidden' name='mid' value='<?php echo $mid ?>'>
									<br><span class="error"> <?php echo $Err;?></span>
									<br>
									<button type='submit' style='background-color:#e67300 ;border-radius:10px; ' name='submit2'  >
									<?php 
									
									echo"<font  FACE='Geneva, Arial' SIZE=5	 id='mybutton' >Rate this Movie</font></button >";
									echo "</form>";
								}
							}
							
							
							
							
							echo "<tr><td id='font1'>" ."Rating:" ."</td><td id='font1'>" .$row['rating'] . "</td></tr>";
							echo "<tr><td id='font1'>" ."Persons-Voted:" ."</td><td id='font1'>" .$row['persons_voted'] . "</td></tr>";
							echo "<tr><td id='font1'>" ."Total-Votes:" ."</td><td id='font1'>" .$row['total_votes'] . "</td></tr>";
							echo"</table>";						
						
							echo"<br>";
							
						
						 
					}
					else{
				
						echo"boooy";		
					}
					
				}
	
	?>
</div>


<div id="bottom">

</div>





</div>

</body>
</html>
