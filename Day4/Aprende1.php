<?php 
    if(!isset($_GET['naran'])){
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<head>
    <title>Aprende GET</title>
</head>
<body>
    <h1>Bem Vindu Admin <?= $_GET['naran']?></h1>
    <a href="http://localhost/webdevelopment/day4/index.php">Back</a>
</body>
</html>