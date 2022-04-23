
<?php

include 'db.php';
// Attempt select query execution
$sql = "SELECT * FROM movie ORDER BY date desc ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table  height=100% width=100% border=1>";
            echo "<tr id='table' >";
			
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
           
            echo "<tr id='table1' border-radius:20px;>";
			echo "<td align=center id='font1'>" ;

			$image='m1/';
			$image.=$row['id'];
			$image.='.jpg';
				   echo '<img src="'.$image .'" border=7 style="border-radius:20px;" height=130px width=140px/>';
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
