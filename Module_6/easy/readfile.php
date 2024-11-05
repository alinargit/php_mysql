<?php
// Specify the path to your text file
$file_path = 'path/to/your/file.txt'; // Make sure this path is correct

// Check if the file exists before trying to read it
if (!file_exists($file_path)) {
    echo "Error: The file does not exist.";
    exit; // Stop further execution if the file does not exist
}

// Method 1: Using file_get_contents()
$content1 = file_get_contents($file_path);
if ($content1 === false) {
    echo "Error: Unable to read the file using file_get_contents().";
} else {
    echo "<h2>File Content (Using file_get_contents):</h2>";
    echo nl2br(htmlspecialchars($content1));
}

// Method 2: Using fopen() and fread()
echo "<hr>"; // Line separator
echo "<h2>File Content (Using fopen and fread):</h2>";

$file = fopen($file_path, 'r');
if ($file) {
    // Read the content of the file
    $content2 = fread($file, filesize($file_path));
    
    // Close the file
    fclose($file);
    
    // Output the content
    echo nl2br(htmlspecialchars($content2));
} else {
    echo "Error: Unable to open the file using fopen().";
}
?>
