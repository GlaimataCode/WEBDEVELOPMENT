<?php
include"Dadus.php";
?>

<!DOCTYPE html>
<head>
    <title>Pajina Estudante</title>
</head>
<body>
    <h1>Lista Estudante</Details></h1>
    <ul>
    <?php foreach($estudante as $x):?>
        <li><a href="detalho.php?id=<?=$x['id_estudante']?>">
    <?= $x['naran_estudante']?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>