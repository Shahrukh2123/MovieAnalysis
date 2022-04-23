
<html>
<head>
<title>IMDB PAGE</title>
<link href="imdb.jpg" rel="shortcut icon">

<style type="text/css">

#table
{

	background-color:#ff751a;
}
#table1
{

	background-color:yellow;
}

#font1
{
font-size:20;
font-family:"comic sans ms",cursive;
}#mybutton
{
border-radius:10px;
font-family:"comic sans ms",cursive;
}
#mybutton1
{
	background-color:#99d6ff;
border-radius:10px;
font-size:30px;	
font-family:"comic sans ms",cursive;
}
#main
{
	width:100%;
	height:100%;
	margin:auto;
	
}
#top
{
	
	width:100%;
	height:15%;
}

#bottom
{
	width:100%;
	height:5%;
}


#mid
{
	background-color:white;
	width:100%;

}
#midleft
{
	background-color:#EAEBF7;
	width:50%;
	height:100%;
	float:left;
}
#midright
{

	background-color:#EAEBF7;
	width:50%;
	height:100%;
	float:left;
	
}

</style>
</head>


<body style="margin:0px; " bgcolor='orange' width="100%" height="100%" align="center">
<div id="main" style=" background-color=#007acc ;">

<div id="top">


<img src="imdb.jpg"   align="left" style="margin: 1% 3%" width="10%" height="70%"/>
     
	 <table align="center"	 style=" padding-left: 0% ;padding-top: 0%"      width=80% height=100% >
	 <tr>
	 <th >
	 <font  FACE="Geneva, Arial" SIZE=6 font-weight=bold  STYLE="font-family:'comic sans ms',cursive; ">
	 Internet Movie Database
	 
	 </font>

	 </th>
		
	 <td align="center	" style=" padding-top: 1.5%">
	 
		<form action="imdbfinal.php">
	 	<button type="submit" style="background-color:#e67300 ;border-radius:10px;">
	<font  FACE="Geneva, Arial" SIZE=5 id="mybutton">
	  
	HOME
		</font>
	 </button > 
	 
	</form>
	 </td>
	 
	 
	 <td align="center	"style=" padding-top: 1.5%">
	 
		<form action="xx.html">
		<button type="submit" style="background-color:#e67300 ;border-radius:10px;"><font  FACE="Geneva, Arial" SIZE=5 id="mybutton">
	  LOGIN
		</font></button > 
		</form>
		 </td>
		<td align="center	"style=" padding-top: 1.5%">
		<form action="xx.html">
		<button type="submit"  style="background-color:#e67300 ;border-radius:10px;"  ><font  FACE="Geneva, Arial" SIZE=5 id="mybutton" >
	  SIGNUP
		</font></button > 
		</form>
		</td>
		
	 	<form action="search.php" method="post">
		<td align="center" >
		<input type="text" name="search">
		
		<input type="submit" name="submit" value="Submit" style="background-color:#e67300;border-radius:10px;" ;font-size: 18px"   id="mybutton">
		</td>
		</form>
		
		
	 </tr>
	 </table>
	 
	 
</div>

<div id="mid">

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

include 'db.php';
// Attempt select query execution
$sql = "SELECT * FROM movie ORDER BY date desc ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table height=100% width=100% border=1>";
            echo "<tr id='table'>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
		       
			
                echo "<th style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"S.NO";
				echo"</font></th>";
			
                echo "<th style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Movie Id";
				echo"</font></th>";
		        
				 echo "<th style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
				echo"</font></th>";
		        
				echo "<th style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Date Of Release";
				echo"</font></th>";
		        
            echo "</tr>";
			$count=1;
        while($row = mysqli_fetch_array($result) and $count!=11){
           
            echo "<tr id='table1'>";
			echo "<td align=center id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";

                echo "<td id='font1'>" . $count . "</td>";
				echo "<td id='font1'>" . $row['id'] . "</td>";
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['date'] . "</td>";
                $count+=1;
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


</div>
<div id="bottom">
<marquee  >
<font style="font-size: 25px;padding-top: 10px">IMDB 2015.</font></marquee>
</div>





</div>
</body>
</html>
