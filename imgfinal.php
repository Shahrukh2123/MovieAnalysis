<html>
<body>
  <?php

   $files = glob("m1/*.*");

  for ($i=1; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);


$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {

   echo '<img src="'.$image .'" height=100px width=100px/>';
} else {
    continue;
 }

}

?>

</body>
</html>