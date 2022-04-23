	
<?php
 session_start(); 
 $mid=$_SESSION['mid'];
 $rate=$_SESSION['newrate'];
 $uname=$_SESSION['username'];							
	include('db.php');		
////////////////////////////////////////////////////
if($_SESSION['submit1']==1)
{
			$oldrate=$_SESSION['oldrate'];
			
			
			$sql2 = "update  rating set rating=rating-(('$oldrate')/(persons_voted))+(('$rate')/(persons_voted))
					 where id=$mid ";
			$sql3 = "update  rating set total_votes=total_votes-'$oldrate'+ '$rate'
					 where id=$mid ";
					 
			$sql4 = "update  userrating set rate=$rate where mid=$mid ";
			
			$result2 = mysqli_query($link, $sql2);
			$result3 = mysqli_query($link, $sql3);
			$result4 = mysqli_query($link, $sql4);
			
			header("location:movie.php");
	
}
else if(isset($_SESSION['submit2'])==1)
{
			
			
			$sql3 = "update  rating set total_votes=total_votes+ '$rate'
					 where id=$mid ";
			$sql4 = "update  rating set persons_voted=persons_voted+ 1
					 where id=$mid ";		 
			$sql5 = "insert into userrating values('$uname','$mid','$rate') ";
			
			$result3 = mysqli_query($link, $sql3);
			$result4 = mysqli_query($link, $sql4);
			$result5 = mysqli_query($link, $sql5);
			
			
			$sql2 = "update  rating set rating=((total_votes)/(persons_voted))
					 where id=$mid ";
			
			$result2 = mysqli_query($link, $sql2);
			
			header("location:movie.php");
	
}
//////////////////////////////////////////////////////////////////////////
?>
