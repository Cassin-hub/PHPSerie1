<?php
if (isset($_POST['notes'])) {
    var_dump($_POST['notes']);
    $notes = ($_POST['notes']);
    $somme = 0;
    $count = 0;
    foreach ($notes as $note) {
        $somme += $note;
        $count++;
    }
    $total = $somme / $count;
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
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div>
                <label for="note <?= $i ?>">Note <?= $i ?> :</label>
                <input type="number" name="notes[]" id="note <?= $i ?>">
            </div>
        <?php endfor ?>
        <button type="submit">Click</button>
    </form>
    <div>
        <span><?php if (isset($total)) {
                    echo $total;
                } ?></span>
    </div>
</body>

</html>