

    <html lang="en">
    <head>
    <title>Simplest jQuery Slideshow</title>
     
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
    	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 1000);
    });
    </script>
     
    </head>
    <body>
    <div class="fadein">
	<tr id='table1'>;
            <td >" ;
<?php
for($i=1;$i<=48;$i++)
{
			$image='m1/';
			$image.=$i;
			$image.='.jpg';
				   echo '<img src="'.$image .'" height=130px width=140px/>';
}
				   ?>
                echo"</td>";
    </div>
    </body>
    </html>