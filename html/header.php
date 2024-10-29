<?php
session_start([
  'cookie_secure' => true,
  'cookie_httponly' => true,
]);
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Access-Control-Allow-Origin: https://ravenatic.com");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Feature-Policy: geolocation 'none'; microphone 'none';");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation=(self 'https://ravenatic.com')");
header("Expect-CT: enforce, max-age=3600");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ravenatic Sdn Bhd</title>
  <link rel="icon" type="images/x-icon" href="image/img-headerlogo.png" />
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>