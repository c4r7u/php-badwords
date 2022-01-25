<?php 
    $text = "I'm in love using PHP";
    $paragraph = strlen($text);
    $bad_word = $_GET["word"];
    $replaced_text = str_replace($bad_word, '***', $text);
    $censoredParagraph = strlen($replaced_text);
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
    <p><?php echo $text ?></p>

    <p><?php echo 'Questo paragrafo è lungo: ' . $paragraph ?></p>

    <hr>

    <p>La parola da censurare è <?php echo $bad_word ?></p>

    <p><?php echo $replaced_text ?></p>

    <p><?php echo 'Questo paragrafo è lungo: ' . $censoredParagraph?></p>
</body>
</html>