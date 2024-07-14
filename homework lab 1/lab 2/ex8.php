<?php
function isPalindrome($string) {
    // Remove any spaces and convert the string to lowercase
    $cleanedString = strtolower(str_replace(' ', '', $string));
    
    // Reverse the cleaned string
    $reversedString = strrev($cleanedString);
    
    // Check if the cleaned string is equal to the reversed string
    if ($cleanedString === $reversedString) {
        return true;
    } else {
        return false;
    }
}

// Test the function
$inputString = "A man a plan a canal Panama";
if (isPalindrome($inputString)) {
    echo "'" . $inputString . "' is a palindrome.";
} else {
    echo "'" . $inputString . "' is not a palindrome.";
}
?>
