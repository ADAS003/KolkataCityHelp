<?php

  
// Create an image of given size
$image = imagecreatetruecolor(500, 300);
$green = imagecolorallocate($image, 0, 153, 0);
  
// Draw the rectangle of green color
imagefilledrectangle($image, 20, 20, 480, 280, $green);
  
// Output image in png format
header("Content-type: image/png");
imagepng($image);
   
// Free memory
imagedestroy($image);

?>