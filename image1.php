<?php
header("Content-type: image/png");
$image = imagecreate(100, 100);

$orangeColor = imagecolorallocate($image, 255, 128, 0);
$whiteColor = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 3, 8, 10, 'Hello world !', $whiteColor);
imagestringup($image, 3, 8, 85, 'Tank you', $whiteColor);

imagepng($image);
?>