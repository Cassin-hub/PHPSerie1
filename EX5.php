<?php
function chain()
{
    $texte = $_GET['texte'];

    echo strlen($texte) . '<br>';
    echo strtoupper($texte) . '<br>';
    echo strtolower($texte) . '<br>';
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="texte">Veuillez saisir une phrase :</label>
        <input type="text" id="texte" name="texte">
        <button type="submit">Click</button>
    </form>
    <?php
    chain();
    ?>
</body>

</html>