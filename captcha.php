<?php
session_start();
$text = rand(10000, 99999);
$_SESSION['vcode'] = $text;
$height = 25;
$width = 60;
$img_p = imagecreate($width, $height);
$background = imagecolorallocate($img_p, 98, 3, 252);
$white = imagecolorallocate($img_p, 255, 255, 255);
$font_size = 14;
imagestring($img_p, $font_size, 5, 5, $text, $white);
imagejpeg($img_p, null, 80);
