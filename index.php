<?php 
$slogan = "Mi chiamo Gabriele, ho 23 anni e vivo a Latina";

echo str_replace("Gabriele", "***", $slogan)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $slogan ?></h1>
    <span><?= strlen($slogan) ?></span>
</body>
</html>