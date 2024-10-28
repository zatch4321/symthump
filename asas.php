<?php
// Set the content type header - in this case, image/png
header('Content-Type: image/png');

// Create an image with dimensions 256x256
$width = 256;
$height = 256;
$image = imagecreatetruecolor($width, $height);

// Allocate colors
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill the background with white
imagefilledrectangle($image, 0, 0, $width, $height, $white);

// Set the points for the polygon
$points = [
    60, 20,   // Point 1 (x, y)
    180, 20,  // Point 2 (x, y)
    150, 100, // Point 3 (x, y)
    200, 180, // Point 4 (x, y)
    40, 180,  // Point 5 (x, y)
    80, 100   // Point 6 (x, y)
];

// Draw the polygon
imagepolygon($image, $points, count($points) / 2, $black);

// Output the image to the browser
imagepng($image);

// Free up memory
imagedestroy($image);
?>
