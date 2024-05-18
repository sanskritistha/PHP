<?php

// Function to read a file and display vowels only
function displayVowelsFromFile($filename) {
    // Check if the file exists
    if (!file_exists($filename)) {
        echo "File '$filename' does not exist.";
        return;
    }

    // Open the file for reading
    $file = fopen($filename, "r");

    // Check if the file is successfully opened
    if (!$file) {
        echo "Error opening file '$filename'.";
        return;
    }

    // Read the file character by character
    while (!feof($file)) {
        $char = fgetc($file);
        // Check if the character is a vowel
        if (preg_match("/[aeiouAEIOU]/", $char)) {
            echo $char;
        }
    }

    // Close the file
    fclose($file);
}

// File to read
$filename = "file1.txt";

// Call the function to display vowels from the file
displayVowelsFromFile($filename);
?>
