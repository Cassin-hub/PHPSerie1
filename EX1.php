<?php 

$chiffre1 = $_GET['chiffre1'];
$chiffre2 = $_GET['chiffre2'];

echo 'La somme est ' . ($chiffre1 + $chiffre2) . '<br>';

echo 'Le produit est ' . ($chiffre1 * $chiffre2). '<br>';

echo 'La différence est ' . ($chiffre1 - $chiffre2) . '<br>';
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
        <label for="chiffre1">Entre un chiffre :</label>
        <input type="number" name="chiffre1" id="chiffre1">
        <label for="chiffre2">Entre un chiffre :</label>
        <input type="number" name="chiffre2" id="chiffre2">
        <button type="submit">click</button>
    </form>
</body>
</html>