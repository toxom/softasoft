<?php

// Function to sanitize input data
function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Function to generate a random username
function generateUsername()
{
    return substr(uniqid(), 0, 8);
}

// Function to get the current timestamp
function getCurrentTimestamp()
{
    return date("Y-m-d H:i:s");
}

?>
