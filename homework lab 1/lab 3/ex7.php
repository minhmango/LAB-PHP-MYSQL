<?php
function generateCaptchaString($length = 6) {
    // Define characters that are easy to read and distinguish
    $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $randomString;
}

// Generate and display a random CAPTCHA string
$captchaString = generateCaptchaString();
echo "Generated CAPTCHA: " . $captchaString;
?>
