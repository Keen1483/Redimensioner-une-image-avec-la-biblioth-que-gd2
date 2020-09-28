<?php
header("Content-type: image/png");

$src = imagecreatefrompng('images/photo1.PNG');
$dest = imagecreatefrompng('images/cover_facebook.PNG');

//On calcule la largeur et la hauteur de l'image source $src
$lg_src = imagesx($src);
$hg_src = imagesy($src);

//On calcule la largeur et la hauteur de l'image de destination $dst
$lg_dest = imagesx($dest);
$hg_dest = imagesy($dest);

//On calcule l'abscisse et l'ordonnée de la destination de l'image $src
$dest_x = $lg_dest - $lg_src;
$dest_y = $hg_dest - $hg_src;

//On mélange les deux images
imagecopymerge($dest, $src, $dest_x, $dest_y, 0, 0, $lg_src, $hg_src, 60);

imagepng($dest);
?>