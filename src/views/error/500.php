<?php
/** @var string|null $message */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>500 Internal Server Error</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;text-align:center;padding-top:10%;background:#f8f8f8;color:#444;}
        h1{font-size:48px;margin-bottom:0;}
        p{font-size:18px;margin-top:5px;}
        a{color:#007bff;text-decoration:none;}
        a:hover{text-decoration:underline;}
    </style>
</head>
<body>
    <h1>500</h1>
    <p><?= isset($message) ? htmlspecialchars($message) : 'Something went wrong on the server.'; ?></p>
    <p><a href="/">Go to Home</a></p>
</body>
</html>
