<!-- write file -->
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

<!-- Read file then close -->
<?php
$fileName = "temp.txt";
if (file_exists($fileName)) {
    $file = fopen($fileName, "r");
    if ($file) {
        $content = fread($file, filesize($fileName));
        fclose($file);
        echo "Content of '$fileName':<br>";
        echo nl2br(htmlspecialchars($content)); // Display content safely
    } else {
        echo "Failed to open file '$fileName'.<br>";
    }
} else {
    echo "File '$fileName' does not exist.<br>";
}
?>