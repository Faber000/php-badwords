<?php
    $text = 'Come se fosse antani supercazzola prematurata';
    $word = $_GET['word'];
    $text_2 = str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p><?php echo $text; ?></p>
    <p><?php echo $text_2; ?></p>
</body>
</html>