
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
	
	$name=$_SESSION['moname'];
	$count1=0;//count of already rated movies.
	$count2=0;//count of unrated movies
	$sql = "SELECT  *
			FROM movie as m 
			join rating as ra on m.id=ra.id   
			where m.name like '%$name%'";
				
				if($result = mysqli_query($link, $sql))
				{
					if(mysqli_num_rows($result) > 0)
					{
						
						while($row = mysqli_fetch_array($result) )
						{
							
							$mid=$row['id'];
							$submit='submit';
							$submit.=$mid;
							
							echo"<form method='post' action='rate1.php' >";
							
							echo"<br>";
							echo"<table  border=0 align='center'  id='table1' width='80%'><col width='250'><col width='200'><col width='200'><col width='200'>";
							$image='m1/';
							$image.=$row['id'];
							$mid=$row['id'];
							$image.='.jpg';
							echo "<tr><td id='font1' rowspan='5' align='center' >";
							echo'<img src="'.$image .'"style="border-radius:20px;" border=0 height=320px width=270px/>';	
							echo "</td></tr>";
							echo "<tr><td id='font1'>"."Movie-Name:"."</td><td id='font1'>" . $row['name'] . "</td>";
							echo "<td id='font1' rowspan='4' align='center'>"; 
							?>
							<button type='submit'  border-radius:0px; ' name='<?php echo $submit ?>'  >
							<font  FACE='Geneva, Arial' SIZE=5	 id='mybutton' >Rate</font></button >
							<input type='hidden' name='mid' value='<?php echo $mid ?>'>
							<?php 
					
							echo"</td></tr>";
							echo "<tr><td id='font1'>" ."Rating:" ."</td><td id='font1'>" .$row['rating'] . "</td></tr>";
							echo "<tr><td id='font1'>" ."Persons-Voted:" ."</td><td id='font1'>" .$row['persons_voted'] . "</td></tr>";
							echo "<tr><td id='font1'>" ."Total-Votes:" ."</td><td id='font1'>" .$row['total_votes'] . "</td></tr>";
							echo"</table>";						
						
							echo"<br>";
							echo"</form>";
						}
						 
					}
					else
					{
				echo "<h1 align=center>";
				echo "No such movie found.";
    			echo "</h1>";
	        		  }
					
				}
	?>
</table>

</div>
<?

<div id="bottom">

</div>

</div>

</body>
</html>
