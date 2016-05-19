<?php


session_start();
$possible = '0123456789abcdefghijklmnopqrstuvwxyzABCDERFGHIJKLMNOPQRSTUVWXYZ';
$text = '';
$i = 0;

while($i < 6)
{
    $text .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
    $i++;
}

$_SESSION['varcode'] = $text;
$height = 25;
$width = 60;

$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 30;

imagestring($image_p, 14, 5, 5, $text, $white);
imagejpeg($image_p, null, 80);

echo $text;



?>
