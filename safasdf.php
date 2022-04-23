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
