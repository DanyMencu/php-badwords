<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>

    <?php
    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adip';
    $word = $_GET['word'];

    echo $paragraph;

    echo '<br>';

    echo 'LENGHT:' . strlen($paragraph);

    echo '<br>';
    echo '<br>';
    ?>

    <form method="get" action="">
        <input type="text" id="word" name="word" placeholder="Che parola censuriamo oggi?" />
        <input type="submit" />
    </form>

    <?php
        echo '<br>';
        echo '<br>';

        $newParagraph = str_replace($word, '***', $paragraph);
        echo $newParagraph;

        echo '<br>';

        echo 'LENGHT:' . strlen($newParagraph);
    ?>

</body>

</html>