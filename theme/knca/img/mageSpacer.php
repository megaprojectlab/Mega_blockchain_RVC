<?php
// 2015-02-16 Skin by WEBsiting.co.kr
header ('Content-Type: image/png');$w = isset($_GET['w']) ? $_GET['w'] : 20;$h = isset($_GET['h']) ? $_GET['h'] : 20;$im = imagecreatetruecolor($w, $h);$bg = imagecolorallocate($im, 87, 87, 87);imagefill($im, 0, 0, $bg);imagejpeg($im,null,95);imagedestroy($im);
?>