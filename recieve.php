<?php
 $lat = $_GET['lat'];
 $lng = $_GET['lng'];
 $loc = $_GET['loc'];
 $txt = $lat.",".$lng.",".$loc;
 $myfile = file_put_contents('logs.txt', PHP_EOL.$txt , FILE_APPEND);
?>