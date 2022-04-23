
<html>
<head>
	<title>Movie Review</title>
	<link href="logo.jpg" rel="shortcut icon">
	<style>
		body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

		.fadein { 
			position:relative; height:332px; width:500px; margin:0 auto;
			background: url("slideshow-bg.png") repeat-x scroll left top transparent;
			padding: 10px;
		}
		.fadein img { position:absolute; left:10px; top:10px; }
	</style>

	<script src="jquery-1.11.3.min.js"></script>
	<script>
		$(function(){
			$('.fadein img:gt(0)').hide();
			setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 1100);
		});
	</script>

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
						<font  FACE="Geneva, Arial" SIZE=6 font-weight=bold color="yellow"  STYLE="font-family:'comic sans ms',cursive; ">
							Movie Database

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

						<form action="login.php">
							<button type="submit" style="background-color:#e67300 ;border-radius:10px;"><font  FACE="Geneva, Arial" SIZE=5 id="mybutton">
								LOGIN
							</font></button > 
						</form>
					</td>
					<td align="center	"style=" padding-top: 1.5%">
						<form action="signup.php">
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


		<div id="mid" >
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
						<td >" ;
							<?php
							for($i=1;$i<=55;$i++)
							{
								$image='m1/';
								$image.=$i;
								$image.='.jpg';
								echo '<img src="'.$image .'" height=470px width=460px/>';
							}
							?>
							echo"</td>";
						</div>

					</div>

				</div>


				<div id="bottom">
					
					</div>

				</div>

			</body>
			</html>
