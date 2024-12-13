<?php
$note = (int) $_GET['note'];

switch ($note) {

    case $note < 0:
        echo 'Erreur';
        break;

    case $note < 10:
        echo 'Insuffisant';
        break;

    case $note >= 10 && $note <= 14:
        echo 'Moyen';
        break;

    case $note >= 15 && $note <= 17:
        echo 'Bien';
        break;

    case $note >= 18:
        echo 'Excellent';
        break;
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
        <label for="note">Entre une note entre 0 et 20 :</label>
        <input type="number" name="note" id="note">
        <button type="submit">click</button>
    </form>
</body>

</html>