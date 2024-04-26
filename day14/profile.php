<?php
    include('session_config.php');
    include('function.php');

    $id_estudante = $_SESSION['id_estudante'];
    $dados = select_table("t_estudante WHERE id_estudante='$id_estudante'");
?>

<?php include('header.php'); ?>

<div class="container-fluid bg-primary text-white text-center p-5">
        <?php 
            include('menu.php');
        ?>

    <h3 class="bg-success text-white p-4 d-flex">
        <div>
            My Profile
        </div>
        <div class="ms-auto">
            <a href="relatoriu/kartaun.php?id=<?= $id_estudante; ?>" target="_blank" class="btn btn-light">Kartaun</a>
        </div>
    </h3>
    <?php 
        foreach ($dados as $a) {?>
        <div class="row">
            <div class="col-md-3">Naran Kompletu</div>
            <div class="col-md-9">: <?= $a['naran_estudante'] ?></div>
        </div>
        <div class="row">
            <div class="col-md-3">Sexu</div>
            <div class="col-md-9">: <?= $a['sexo'] ?></div>
        </div>
        <div class="row">
            <div class="col-md-3">Emis</div>
            <div class="col-md-9">: <?= $a['emis'] ?></div>
        </div>
        <div class="row">
            <div class="col-md-3">Data Moris</div>
            <div class="col-md-9">: <?= $a['data_moris'] ?></div>
        </div>
        
        <?php } ?>
    </div>
    
<?php include('footer.php'); ?>