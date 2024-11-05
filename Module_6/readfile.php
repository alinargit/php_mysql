<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Specify the path to your text file
$file_path = 'test.txt'; // Make sure this is the correct path to your file

// Check if the file exists before trying to read it
if (!file_exists($file_path)) {
    echo "Error: The file does not exist.";
    exit; // Stop further execution if the file does not exist
}

// Read the content of the file
$content = file_get_contents($file_path);
if ($content === false) {
    echo "Error: Unable to read the file.";
} else {
    // Output the content
    echo "<h2>File Content:</h2>";
    echo nl2br(htmlspecialchars($content)); // nl2br to preserve new lines in HTML
}
?>
