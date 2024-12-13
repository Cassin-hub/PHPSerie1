<?php
$words = ["voiture", "avion", "moto", "bateau", "camion", "scooter"];

if (isset($_POST['texte'])) {
    $word = $_POST['texte'];
    foreach ($words as $item) {
        $found = false;
        if ($item === $word) {
            $found = true;
            break;
        }
    }
    if ($found) {
        echo "Le mot $word se trouve dans le tableau";
    } else {
        echo "Le mot $word n'est pas présent dans le tableau";
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
        <label for="texte">Veuillez saisir un mot :</label>
        <input type="text" id="texte" name="texte">
        <button type="submit">Click</button>
    </form>
</body>

</html>