<?php
/**
 * @var string $heading
 * @var string $message
 */
?>

<!doctype html>
<html lang="en" style="
    height: 100%;
">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>404 Page Not Found | Easy!Appointments</title>
    <style>
        #error-container {
            
            background: #f8f6f2;
            min-width: 450px;
            max-width: 600px;
            margin: auto;
            font: 16px/24px normal Helvetica, Arial, sans-serif;
            color: #000000;
        }

        #error-container a {
            color: #000000;
            text-decoration: underline;
            background-color: transparent;
            font-weight: normal;
        }

        #error-container h1 {
            background-color: transparent;
            font-size: 24px;
            line-height: 1.5em;
            font-weight: normal;
            margin: 0;
            padding: 20px;
        }

        #error-container code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            display: block;
            margin: 14px 0 14px 0;
            padding: 20px;
        }

        #error-container p {
            margin: 20px;
        }
    </style>
</head>
<body style="
    height: 100%;
    padding: 0;
    margin: 0;
    display: flex;
    background: #f8f6f2;
">
<div id="error-container">
    <h1>
        <?= $heading ?>
    </h1>

    <?= $message ?>
</div>
</body>
</html>
