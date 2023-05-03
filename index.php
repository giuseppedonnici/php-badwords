<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body> 
    <form action="censured.php" method="GET">
    <label for="word">Parola da censurare: </label>
    <input type="text" id="word" name="word"><br>

    <label for="paragraph">Paragrafo: </label><br>
    <textarea name="paragraph" id="paragraph" cols="40" rows="5"></textarea><br>

    <button type="submit">Invia</button>
    </form>
    
</body>
</html>