<?php

$myfile = fopen("location.txt", "w");
$txt = "\nlat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>
