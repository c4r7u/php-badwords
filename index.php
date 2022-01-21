<?php 
    $text = "I'm in love using PHP";
    $paragraph = strlen($text);
    $badword = str_replace( 'love', '***', $text );
    $censoredParagraph = strlen($badword);
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

    <p><?php echo $badword ?></p>

    <p><?php echo 'Questo paragrafo è lungo: ' . $censoredParagraph ?></p>
</body>
</html>