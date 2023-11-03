<?php
$key = $_GET['key'];
$str = $_GET['str'];
$return = str_replace($key, "***", $str);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censured</title>
</head>

<body>

    <div>
        <h2>Parola da censurare</h2>
        <?php
        echo $key ?>
    </div>
    <div>
        <h2>Paragrafo</h2>
        <?php
        echo "La frase iniziale è: " . $str ?>
    </div>

    <div>
        <?php
        echo "E' lunga: " . strlen($str) . " caratteri" ?>
    </div>
    <hr>
    <div>
        <?php
        echo $return ?>
    </div>

</body>

</html>