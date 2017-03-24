<?php
$files = scandir ( "/home/pi/camera/image/images_cam1/", SCANDIR_SORT_DESCENDING );
$newest_file = $files [1];
// echo $newest_file;
$imagePath = "/home/pi/camera/image/images_cam1/" . $newest_file;
// echo $imagePath;
$image = file_get_contents ( $imagePath );
header ( "Content-Type: image/jpeg" );
header ( "Content-Length: " . strlen ( $image ) );
echo $image;
?>