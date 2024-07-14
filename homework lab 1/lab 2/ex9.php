<?php
function isAllLowercase($string) {
    // Compare the original string with its lowercase version
    if ($string === strtolower($string)) {
        return true;
    } else {
        return false;
    }
}

// Test the function
$inputString = "EXAMpLE";
if (isAllLowercase($inputString)) {
    echo "'" . $inputString . "' is all in lowercase.";
} else {
    echo "'" . $inputString . "' is not all in lowercase.";
}
?>
