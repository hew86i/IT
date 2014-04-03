<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdef ghijklmnopq  rstuvwx  yzABCDE FGHIJK LMNO PQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// echo "tesdfssetsetase ase ";

echo "<h1>" . generateRandomString(12) . "<h1>";
echo "<p>" . generateRandomString(50) . "<p>";
// echo "<p>" . date('H:i:s t') . "<p>";

?>