<a href="imdbfinal.php">
<img src="logo.jpg"   align="left" style="margin: 1% 3%" width="10%" height="70%" >
     </a>
	 <table  align="center"	 style=" padding-left: 0% ;padding-top: 0%;"     width=80% height=100% >
	 <tr style="">
	 <th >
	 <font  color="grey" FACE="Geneva, Arial" SIZE=6 font-weight=bold  STYLE=" font-family:'comic sans ms',cursive; " >
	  Movie Database
	 
	 </font>

	 </th>
		
	 <td align="center	" style=" padding-top: 1.5%">
	 
		<form action="imdbfinal.php">
	 <input type="submit" value=" HOME" id="mybutton"style=" "/>
	
	</form>
	 </td>
	 
	 
	 <td align="center	"style=" padding-top: 1.5%">
	 
		<form action="signout.php">
		<input type="submit" value="SIGNOUT" id="mybutton" style=""/>
	</form>
		 </td>
		<td align="center	"style=" padding-top: 1.5%">
		<form action="rate.php">
	<input type="submit" value=" RATE MOVIE" id="mybutton"style=" "/>
		</form>
		</td>
		
	 	<form action="search.php" method="post">
		<td align="center" >
		<font color="grey">
		<input type="text" style="border:2px solid #456879;
	border-radius:10px;
	height: 25px;
	width: 230px;" name="search"  value="movie/ actor/ director/ producer..." onfocus="if(this.value!='') this.value='';"  >
		</font>
		<input type="submit" name="submit" value="search" id="mybutton"style=" "/>
		</td>
		</form>
		
	 </tr>
	 <tr >
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 
	 <td  align="center" color="green"  height: 5px;"   >
	 <h2>Welcome 
	 <?php
	// session_start();
	 echo $_SESSION["username"]."  !";
	 
	 ?>
	 </h2>
	 </td>
	 </tr>
	 </table>
	 

