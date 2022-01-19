<?php
header("Content-type: image/jpeg");
$font=realpath('arial.ttf');
$img=imagecreatefromjpeg("cer.jpg");
$color=imagecolorallocate($img,51,51,102);
$name="Ali HAji Hasan";
imagettftext($img,45,0,120,530,$color,$font,$name);
$teacher="Kado";
imagettftext($img,30,0,260,1130,$color,$font,$teacher);
$numcerti="113-113-113";
imagettftext($img,20,0,255,1192,$color,$font,$numcerti);
imagejpeg($img);
imagejpeg($img,"student/".$name.".jpg");
imagedestroy($img);
?>