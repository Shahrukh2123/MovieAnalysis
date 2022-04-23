

<div id="midleft">

<table height=100% width=100%>

	 <th >
	 <font color="black" FACE="Geneva, Arial" SIZE=7 font-weight=bold  STYLE="font-family:'comic sans ms',cursive; ">
	TOP SEARCHES 
	 </font>

	 </th>
	

<tr>
<td align="center">
<form action="latestmovies.php">
	
	<input type="submit" value="    10 Latest Movies      " id="mybutton1"style=" "/>
		
</form>

		</td>
		</tr>

<tr>

<td align="center">
<form action="toprated.php">
	<input type="submit" value="  10 Top Rated Movies   " id="mybutton1"style=" "/>
	  </form>
</td>
</tr>

<tr>

<td align="center">
<form action="leastrated.php">
	<input type="submit" value=" 10 Least Rated Movies" id="mybutton1"style=" "/>
		</form>
</td>
</tr>

<tr>

<td align="center">
<form action="database.php">
	<input type="submit" value="    Show Full Database    " id="mybutton1"style=" "/>
</form>
</td>
</tr>


<tr>

<td>
</td>
</tr>

</table>
</div>

<div id="midright">


<div class="fadein">
	<tr id='table1'>;
            <td >
<?php
for($i=1;$i<=55;$i++)
{
			$image='m1/';
			$image.=$i;
			$image.='.jpg';
			
			
   echo '<img src="'.$image .'"  height=480px width=460px border=7 style="border-radius:20px;"/>';

				   
				   }
				   ?>
				   
                </td>
    </div>

</div>
