<?php
$fileName = "temp.txt";
$content = "Hello, this is a file named $fileName. It contains some PHP code that demonstrates basic functionality.";

$file = fopen($fileName, "w");
if ($file) {
    fwrite($file, $content);
    fclose($file);
    echo "File '$fileName' created successfully with content.<br>";
} else {
    echo "Failed to create file '$fileName'.<br>";
}


?>