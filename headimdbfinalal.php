
<head>
<title>IMDB PAGE</title>
<link href="logo.jpg" rel="shortcut icon">
 <style>
    body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
	.error {color: #FF0000;}

    .fadein { 
    position:relative; height:332px; width:500px; margin:0 auto;
    background: url("slideshow-bg.png") repeat-x scroll left top transparent;
    padding: 10px;
     }
    .fadein img { position:absolute; left:10px; top:10px; }
    </style>
     
    <script src="jquery-1.11.3.min.js">
	
	function Clear()
	{    
	document.getElementById("textbox1").value= "";
	}

	</script>
    <script>
    $(function(){
    	$('.fadein img:gt(0)').hide();
    	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 1100);
    });
    </script>
   
<style type="text/css">
#borderimg2 {
    border: 10px solid transparent;
    padding: 15px;
    -webkit-border-image: url(border.png) 20% round; /* Safari 3.1-5 */
    -o-border-image: url(border.png) 20% round; /* Opera 11-12.1 */
    border-image: url(border.png) 20% round;
}
#table
{

    background-image: url("2.jpg");
}
#table1
{

   background-image: url("back2.jpg");
    height: 300px;
    width:700px;
     border-radius: 30px;
   

	
}
#txt1{
	background-color: skyblue;
	
}
#txt2{
	background-color: skyblue;
	
}


#font1
{
	
font-size:20;
font-family:'Montserrat',sans-serif!important;
}#mybutton
{
	
font-size:20px;	
background-color: lightgrey;

font-family:'Montserrat',sans-serif!important;
}
#mybutton1
{
 background-color: lightgrey;

font-size:30px;	
font-family:'Montserrat',sans-serif!important;
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
	height:17%;
}




#mid1
{
	width:100%;
	height:78%

}
#mid
{
	
	width:100%;
	
}
#midleft
{
	width:50%;
	height:100%;
	float:left;
}
#midright
{

	width:50%;
	height:100%;
	float:left;
	
}


</style>
<style>
body  {
    background-image: url("back5.jpg");
	width:100%;
	height:100%;
}
</style>
</head>


