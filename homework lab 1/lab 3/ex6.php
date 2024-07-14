<?php
// Function to transform a string into all uppercase letters
function toUpperCase($string) {
    return strtoupper($string);
}

// Function to transform a string into all lowercase letters
function toLowerCase($string) {
    return strtolower($string);
}

// Function to make a string's first character uppercase
function capitalizeFirstCharacter($string) {
    return ucfirst($string);
}

// Function to make the first characters of all the words in a string uppercase
function capitalizeWords($string) {
    return ucwords($string);
}

// Test the functions
$inputString = "hello world! this is a test.";

echo "Original string: " . $inputString . "\n";
echo "All uppercase: " . toUpperCase($inputString) . "\n";
echo "All lowercase: " . toLowerCase($inputString) . "\n";
echo "First character uppercase: " . capitalizeFirstCharacter($inputString) . "\n";
echo "First characters of all words uppercase: " . capitalizeWords($inputString) . "\n";
?>
