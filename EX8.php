<?php
if ((int) $_POST['numbers']) {
    $numbers = (int) $_POST['numbers'];
    $somme = 0;
    for ($i = 0; $i < $numbers; $i++) {
        $somme = $somme + $i;
    }
    if ($i >= $numbers) {
        echo "La somme est $somme" . '<br>';
        echo "La somme de 1 jusqu'a ce nombre est $i";
    }
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
    <form action="" method="post">
        <label for="numbers">Veuillez saisir un nombre :</label>
        <input type="number" id="numbers" name="numbers">
        <button type="submit">Click</button>
    </form>
</body>

</html>