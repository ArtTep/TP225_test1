<?php

// Function to hash using MD5
function hashMD5($input) {
    return md5($input);
}

// Function to hash using SHA1
function hashSHA1($input) {
    return sha1($input);
}

// Prompt user for choice
$choice = strtolower(readline("Enter your choice to hash phrase (MD5 or SHA1): "));

// Sample input
$input = readline("Enter in your sentence?: ");

// Hash based on user's choice
$hash = '';
switch ($choice) {
    case 'md5':
        $hash = hashMD5($input);
    case 'sha1':
        $hash = hashSHA1($input);
}

if (!empty($hash)) {
    echo strtoupper($choice) . " Hash: $hash\n";
} else {
    echo "Invalid choice\n";
}

?>
