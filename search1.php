
<html>
<head>
<title>IMDB PAGE</title>
<link href="imdb.jpg" rel="shortcut icon">

<style type="text/css">

#mybutton
{
border-radius:10px;
font-family:"comic sans ms",cursive;
}
#mybutton1
{
background-color:#ff8c1a;
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
	height:80%;

}
#midleft
{
	background-color:yellow;
	width:50%;
	height:80%;
	float:left;
}
#midright
{

	background-color:yellow;
	width:50%;
	height:80%;
	float:left;
	
}

</style>
</head>

<body style="margin:0px; " bgcolor='orange' width="100%" height="100%" align="center">
<div id="main" style=" background-color=#007acc ;">

<div id="top">


<img src="imdb.jpg"   align="left" style="margin: 1% 3%" width="10%" height="70%"/>
     
	 <table align="center"	 style=" padding-left: 0% ;padding-top: 0%;"     width=80% height=100% >
	 <tr>
	 <th >
	 <font  FACE="Geneva, Arial" SIZE=6 font-weight=bold  STYLE="font-family:'comic sans ms',cursive; ">
	 Internet Movie Database
	 
	 </font>

	 </th>
		
	 <td align="center	" style=" padding-top: 1.5%">
	 
		<form action="imdbfinal.php">
	 	<button type="submit" style="background-color:#e67300 ;border-radius:10px; ">
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
		
	 	<form action="xx.php" method="get">
		<td align="center" >
		<input type="text" name="search">
		
		<input type="submit" value="search"style="background-color:#e67300;border-radius:10px;" ;font-size: 18px"   id="mybutton">
		</td>
		</form>
		
		
	 </tr>
	 </table>
	 
	 
</div>


<div id="mid" >
<?php
if(isset($_POST['submit']) && $_POST['submit']=='Submit')
{
     $name=$_POST['search'];
     echo $name;

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "imdb");
 
// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt select query execution
$sql1 = "SELECT  m.name FROM movie as m where m.name like '%$name%' ";

if(
$result1 = mysqli_query($link, $sql1) 
	
){
    if(mysqli_num_rows($result1) > 0 ){
		  while($row = mysqli_fetch_array($result1) ){
		
            echo "<tr >";
       		echo "<td >" . $row['name'] . "</td>";
            echo "</tr>";
        }
       mysqli_free_result($result1);
    }
	
	
	
	else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
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
