<?php
$filename = "../Exe2/test.txt";
$handle = fopen($filename, "r");

while (!feof($handle)) {
    $content = fgets($handle);
    $converted = explode(",", $content);
    echo "<pre>";
    print_r($converted);

    
}

fclose($handle);

