
<html>
<head>
<title>IMDB PAGE</title>
<link href="imdb.jpg" rel="shortcut icon">


<style type="text/css">

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
	height:100%;
	margin:auto;
	
}
#top
{
	
	
	height:15%;
}

#bottom
{
	height:5%;
}


#mid
{
	background-color:white;
	

}
#midleft
{
	background-color:#EAEBF7;
	height:100%;
	float:left;
}
#midright
{

	background-color:#EAEBF7;
	height:100%;
	float:left;
	
}
#table
{

	background-color:#ff751a;
}
#table1
{

	background-color:yellow;
}

</style>
</head>

<body style="margin:0px; " bgcolor='orange'  height="100%" align="center">
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
	 	<button  type="submit" onmouseover="changecolor()" style="background-color:#e67300 ;border-radius:10px;">
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


<div id='mid' >
<?php

include 'db.php';
// Attempt select query execution

$sql1 = "SELECT * FROM movie  
 join runtime as r on movie.id=r.id 
 join cast on movie.id=cast.id 
 join crew on movie.id=crew.id 
 join rating as ra on movie.id=ra.id 
 join box_office as b on movie.id=b.id 
 join associated_movies as a on movie.id=a.id 
 ";

if($result1 = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result1) > 0  ){
		
	   echo "<table height=100%  border=1 bgcolor='white' >";
            echo "<tr>";

				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
		       
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Movie Id";
				echo"</font></th>";
		        
				 echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
				echo"</font></th>";
		        
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Date Of Release";
				echo"</font></th>";
		        
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Hours";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Minutes";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo" TotalTime(in_min.)      " ;
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Actor";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Actress";
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Director";
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Producer";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Company";
				echo"</font></th>";
				
				/////////////////////
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo" Country ";
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo" Persons_Voted ";
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo" Total_Votes ";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo" Rating ";
				echo"</font></th>";

				/////////////////////
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Weekend_Gross";
				echo"</font></th>";
		        
				 echo "<th id='table'  style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Opening_Weekend";
				echo"</font></th>";
		        
				echo "<th id='table'  style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Gross";
				echo"</font></th>";
		        
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Earining_In_Country";
				echo"</font></th>";
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Budget";
				echo"</font></th>";
				
				/////////////////////
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Sequel";
				echo"</font></th>";
				
				
				echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Prequel";
				echo"</font></th>";
				
				/////////////////////
            echo "</tr>";
			$i=0;
        while($row1 = mysqli_fetch_array($result1)){
            

			echo "<tr id='table1'>";
            echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row1['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            

			echo "<td id='font1' align=center >" . $row1['id'] . "</td>";
                echo "<td  align=center id='font1'>" . $row1['name'] . "</td>";
                echo "<td  align=center id='font1'>" . $row1['date'] . "</td>";
               
			    echo "<td id='font1' align=center >" . $row1['hours'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['minutes'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['totaltime'] . "</td>";

				
			    echo "<td id='font1' align=center >" . $row1['male'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['female'] . "</td>";
				
				echo "<td id='font1' align=center >" . $row1['director'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['producer'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['company'] . "</td>";
                
				
				echo "<td id='font1' align=center >" . $row1['country'] . "</td>";
				echo "<td id='font1' align=center >" . $row1['persons_voted'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['total_votes'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['rating'] . "</td>";
				
				
				echo "<td id='font1' align=center >" . $row1['weekend_gross'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['opening_weekend'] . "</td>";
				echo "<td id='font1' align=center >" . $row1['gross'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['earning_in_country'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['budget'] . "</td>";
				
				echo "<td id='font1' align=center >" . $row1['sequel'] . "</td>";
                echo "<td id='font1' align=center >" . $row1['prequel'] . "</td>";
                
				
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result1);
    } else{
        echo "No records matching your query were found.";
    }
} else{
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
