<?php
// Input values from GET request
$interest       = $_GET['c'] ?? null;
$physical       = $_GET['c2'] ?? null;
$city           = $_GET['city'] ?? '';
$phone          = $_GET['phone'] ?? '888-294-0056';
$swapped_number = $_GET['swapped_number'] ?? '';
$keyword        = $_GET['keyword'] ?? null;

// Email settings
$to      = "craig@localjungle.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: Lobo Ley Accidentes New <info@loboley.com>\r\n";

// Get IP and referer
$ip = $_SERVER['HTTP_CLIENT_IP']
      ?? $_SERVER['HTTP_X_FORWARDED_FOR']
         ?? $_SERVER['REMOTE_ADDR'];

$url = $_SERVER['HTTP_REFERER'] ?? 'No referer';
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Build the message (unchanged structure from your original code)
$message = "URL: {$url}<br>" .
           "IP: {$ip}<br>" .
           "Keyword: {$keyword}<br>" .
           "Interest: {$interest}<br>" .
           "Physical: {$physical}<br>" .
           "Time: " . date( "Y-m-d H:i:s" ) . "<br>" .
           "DB City Name: " . ( $city ?: 'Not Found' ) . "<br>" .
           "Phone: " . $phone . "<br>" .
           "Swapped Number: " . $swapped_number;
$message .= "<br>User Agent: " . $user_agent;

// Send the email
mail( $to, 'Lobo PPC Carro New Swap Tracking', $message, $headers );