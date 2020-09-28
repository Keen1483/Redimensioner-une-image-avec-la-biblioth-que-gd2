<?php
header('Content-type: image/jpeg');

$src = imagecreatefromjpeg('images/ppndj.jpg');
$dst = imagecreatetruecolor(100, 100);

$lg_src = imagesx($src);
$hg_src = imagesy($src);

$lg_dst = imagesx($dst);
$hg_dst = imagesy($dst);

//On crée la miniature
imagecopyresampled($dst, $src, 0, 0, 0, 0, $lg_dst, $hg_dst, $lg_src, $hg_src);

// On enregistre la miniature sous le nom "ndj_mini.jpg"
imagepng($dst, 'images_mini/ndj_mini.jpg');
?>