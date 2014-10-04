<?php
$exclude = json_decode(file_get_contents("exclude.json"));

$dir = array_values(array_diff(scandir('.'), $exclude));
$json = json_encode($dir);
echo($json);

$file = fopen('folder-contents.json', 'w');
fwrite($file, $json);
fclose($file);