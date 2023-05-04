<?php
$word = $_GET['word'];
$para = $_GET['paragraph'];

if(isset($_ET['word'])) {
    $word = $_GET['word'];
}

if(empty($para)) {
    echo 'Inserisci il testo';
}

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
        ?>
    </p>
    <p>Lunghezza: 
        <?php 
        $para_len = strlen($para);
        echo $para_len;
        ?>
    </p>
    <h2>Paragrafo censurato:</h2>
    <p>
        <?php
        $para_replace = str_replace($word, '***', $para);
        echo $para_replace;
        ?>
    </p>
    <p>Lunghezza: 
        <?php 
        $para_len = strlen($para_replace);
        echo $para_len;
        ?>
    </p>
</body>
</html>