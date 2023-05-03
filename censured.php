<?php
$word = $_GET['word'];
$para = $_GET['paragraph'];

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
    <h2>Paragrafo:</h2>
    <p>
        <?php
        echo $para;
        $para_explode = explode(' ', $para);
        var_dump($para_explode);
        ?>
    </p>
    <h2>Paragrafo censurato:</h2>
    <p>
        <?php
        $para_replace = str_replace($word, '***', $para);
        echo $para_replace;
        ?>
    </p>
</body>
</html>