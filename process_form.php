<?php
// Simple dynamic values
$date = date("l, F jS Y h:i A");
$ip   = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP Page</title>
    <style>
        body {
            background: #f7f7f7;
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        .card {
            background: white;
            padding: 25px;
            max-width: 500px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2a7cff;
            margin-top: 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #2a7cff;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
        }
        a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>PHP Test Page</h1>

    <p><strong>Current Server Date & Time:</strong><br>
       <?= $date ?></p>

    <p><strong>Your IP Address:</strong><br>
       <?= $ip ?></p>

    <p>This page is powered by PHP and shows dynamic information.</p>

    <a href="index.html">Return Home</a>
</div>

</body>
</html>

