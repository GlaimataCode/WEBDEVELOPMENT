<?php 
    if(!isset($_GET['id'])){
        header("location: index.php");
    }
        include('Dadus.php');
?>
<!DOCTYPE html>
<head>
    <title>Detallu</title>
</head>
<body>
    <h1>Lista Dadus Dadus Estudante</h1>
    <ul>
        <?php 
        $check_id=0;
        foreach($estudante as $x){
            if($x['id_estudante'] == $_GET['id']){
                $check_id=1;
                ?>
                <li><img src="<?=$x['foto']?>" alt="<?$x['naran_estudante']?>"width="100px"></li>
                <li><?=$x['naran_estudante']?></li>
                <li><?=$x['Sexu']?></li>
                <li><?=$x['tinan']?></li>
                <li><?=$x['hela_fatin']?></li>
           <?php }
        }
        if($check_id==0){
            echo '<li>Deskulpa, Dadus husi Estudante ne\e Laiha</li>';
        }?>
    </ul>
    <a href="index.php">Back</a>
</body>
</html>