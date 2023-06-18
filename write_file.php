<?php
function writeFile($path, $text) {
    $file = fopen($path, 'w');
    fwrite($file, $text);
    fclose($file);
}
$path = $_POST['path'];
$text = $_POST['text'];
$result = writeFile($path, $text);
echo $result;
?>
