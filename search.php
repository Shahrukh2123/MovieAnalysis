
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

<?php

echo"<div id='mid' >";
if(isset($_POST['submit']) && $_POST['submit']=='Submit'){
     $name=$_POST['search'];
 

include 'db.php';

// Attempt select query execution
$sql1 = "SELECT  m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id   
join cast as cr on m.id=cr.id where
m.name like '%$name%'";
$sql2 = "SELECT  m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id
join cast as cr on m.id=cr.id where
cr.male like '%$name%' ";
$sql3 = "SELECT  m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id  
join cast as cr on m.id=cr.id where
cr.female like '%$name%' ";
$sql4 = "SELECT  m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id  
join cast as cr on m.id=cr.id where
 ca.director like '%$name%' ";
$sql5 = "SELECT m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id  
join cast as cr on m.id=cr.id where
 ca.producer like '%$name%' ";
$sql6 = "SELECT m.id,m.name,cr.male,cr.female,ca.producer,ca.director,ca.company
FROM movie as m 
join crew as ca on m.id=ca.id   
join cast as cr on m.id=cr.id where
 ca.company like '%$name%' ";

if(
$result1 = mysqli_query($link, $sql1) and
$result2 = mysqli_query($link, $sql2) and
$result3 = mysqli_query($link, $sql3) and
$result4 = mysqli_query($link, $sql4) and
$result5 = mysqli_query($link, $sql5) and
$result6 = mysqli_query($link, $sql6) 
	
){
	$flag=0;
	for($i=0;$i<=60;$i++)
	{
		$array[$i]=0;
	
	}
	
	
    if(mysqli_num_rows($result1) > 0   ){
		
		///////////////
		if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
            echo "</tr>";
		/////////////
		}
		  while($row = mysqli_fetch_array($result1) ){
			$flag=1;
			if($array[$row['id']]==0)
			{
            $array[$row['id']]=1;
						/////////////
										echo "<tr id='table1'>"; echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////
			}
        }
       mysqli_free_result($result1);
    }
	
	 if(mysqli_num_rows($result2) > 0 ){
		 ///////////////
		 if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
            echo "</tr>";
		/////////////
		 }while($row = mysqli_fetch_array($result2) ){
		$flag=1;
            if($array[$row['id']]==0)
			{
            $array[$row['id']]=1;
			/////////////
										echo "<tr id='table1'>"; echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////}
	 }
	 }
       mysqli_free_result($result2);
    }
	
	 if(mysqli_num_rows($result3) > 0 ){
		 ///////////////
		 if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
            echo "</tr>";
		/////////////
		 }while($row = mysqli_fetch_array($result3) ){
		$flag=1;
            if($array[$row['id']]==0)
			{
            $array[$row['id']]=1;
			/////////////
										echo "<tr id='table1'>"; echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////}
        }
      } mysqli_free_result($result3);
    }
	
	 if(mysqli_num_rows($result4) > 0 ){
		 ///////////////
		 if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
				
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
            echo "</tr>";
		/////////////
		 }
		  while($row = mysqli_fetch_array($result4) ){
		$flag=1;
           if($array[$row['id']]==0)
			{
            /////////////
										echo "<tr id='table1'>"; echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////}
        }
       }mysqli_free_result($result4);
    }
	
	 if(mysqli_num_rows($result5) > 0 ){
		 ///////////////
		 if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
				
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
		 echo "</tr>";}
		/////////////
		  while($row = mysqli_fetch_array($result5) ){
		$flag=1;
           if($array[$row['id']]==0)
			{
            $array[$row['id']]=1;
			/////////////
										echo "<tr id='table1'>"; echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
                echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////}
		}
       }mysqli_free_result($result5);
    }
	
	 if(mysqli_num_rows($result6) > 0 ){
		 ///////////////
		 if($flag==0){
		 echo "<table  width=100%  border=1 bgcolor='white' >";
            echo "<tr>";
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Poster";
				echo"</font></th>";
		       
			
			echo "<th id='table' style='text-decoration: underline	;'><font  FACE='Geneva, Arial' SIZE=4 font-weight=bold  STYLE='font-family:'comic sans ms',cursive; '>";
				echo"Name";
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
				
            echo "</tr>";
		/////////////
		 }
		  while($row = mysqli_fetch_array($result6) ){
		$flag=1;
        
           if($array[$row['id']]==0)
			{
            $array[$row['id']]=1;
			/////////////
						
						

				echo "<tr id='table1'>";
                
				 echo "<td id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
                 echo"</td>";
            
				
				echo "<td id='font1'>" . $row['name'] . "</td>";
                echo "<td id='font1'>" . $row['male'] . "</td>";
                echo "<td id='font1'>" . $row['female'] . "</td>";
				echo "<td id='font1'>" . $row['director'] . "</td>";
                echo "<td id='font1'>" . $row['producer'] . "</td>";
                echo "<td id='font1'>" . $row['company'] . "</td>";
                echo "</tr>";
						/////////////}
        }
       }mysqli_free_result($result6);
    }
	
	
	else if($flag==0){
		  echo "<h1 align=center>";
        echo "No such records were found.";
		  echo "</h1>";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);}

echo"</div>";
?>



</div>

</body>
</html>
