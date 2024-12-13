<?php
$voyelle = ['a', 'e', 'i', 'u', 'o', 'y'];
$count = 0;

if (isset($_POST['word'])) {
    $word = $_POST['word'];
foreach ($voyelle as $voyelles) {
    $count += substr_count(strtolower($word), $voyelles);
}
echo $count . 'voyelles';
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
        <label for="word">Veuillez saisir un mot :</label>
        <input type="text" id="word" name="word">
        <button type="submit">Click</button>
    </form>
</body>

</html>