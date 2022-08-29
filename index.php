<?php 
$slogan = "Mi chiamo Gabriele, ho 23 anni e vivo a Latina";

$censored_slogan = str_replace("Gabriele", "***", $slogan);


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
    <h2>Frase non censurata:</h2>
    <p><?= $slogan ?></p>
    <span><?= strlen($slogan) ?></span>
    <h2>Frase censurata:</h2>
    <p><?= $censored_slogan ?></p>
    <span><?= strlen($censored_slogan) ?></span>
</body>
</html>