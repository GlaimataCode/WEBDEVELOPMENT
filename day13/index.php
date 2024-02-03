 <?php
 include('session_config.php');
    include("function.php");
    $dados = select_table('t_estudante');
    
    if(isset($_POST['gravar'])){
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];
        $nu_telefone = $_POST['nu_telefone'];
        $emis = $_POST['emis'];

        $resultadu = insert_estudante($naran_estudante,$sexo,$data_moris,$nu_telefone,$emis);
        header('Location: index.php');
    }
    if(isset($_POST['edit'])){
        $id_estudante = $_POST['id_estudante'];
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];
        $nu_telefone = $_POST['nu_telefone'];
        $emis = $_POST['emis'];

        $resultadu = edit_estudante($id_estudante, $naran_estudante,$sexo,$data_moris,$nu_telefone,$emis);
        header('location: index.php');
    }
    if(isset($_GET['delete_id'])){
        $naran_tabela ='t_estudante';
        $p_key = 'id_estudante';
        $value = $_GET['delete_id'];

        $resultadu = delete($naran_tabela,$p_key,$value);
            header('location: index.php');
    }
    $dados = select_table('t_estudante ORDER BY naran_estudante ASC');
 ?>
<?php include('hedaer.php'); ?>

 <div class="container-fluid bg-primary text-white text-center p-5">
       <?php
            include('menu.php');
       ?>
    <?php if(!isset($_GET['insert']) && !isset($_GET['edit'])) {?>
        <div class="alert alert-info d-flex mt-2">
            <h1>Lista Estudante</h1>
            <div class="ms-auto">
            <a class="btn btn-primary" href="index.php?insert=true">Insert</a></a>
        </div>
        </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>NARAN ESTUDANTE</th>
                <th>SEXU</th>
                <th>DATA MORIS</th>
                <th>NU.TELEMOVEL</th>
                <th>EMIS</th>
                <th>ASAUN</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach($dados as $a){
            ?>
            <tr>
              <td><?=$no++?></td>
              <td><?=$a['naran_estudante']?></td>
              <td><?=$a['sexo']?></td> 
              <td><?=$a['data_moris']?></td>
              <td><?=$a['nu_telefone']?></td>
              <td><?=$a['emis']?></td>
              <td>
                <a class="btn btn-warning" href="index.php?edit=<?= $a['id_estudante'] ?>">Edit</a> |
                <a class="btn btn-danger" href="index.php?delete_id=<?= $a['id_estudante'] ?>">Delete</a>
             </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    }
        if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
            ?>
            <div class="alert alert-info d-flex mt-2">
            <h2>Entry Dadus Estudante</h2>
            </div>
            
            <form action="index.php" method="post">
                    <div class="col-md-3">
                    <label for="naran_estudante" class="form-label">Naran Estudante</label>
                    <input type="text" class="form-control" name="naran_estudante">
                    </div>
                    <div class="col-md-2">
                    <label for="sexo" class="form-label">Sexo</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="" selected hidden>::-Hili Sexu -::</option>
                            <option value="Mane">Mane</option>
                            <option value="Feto">Feto</option>
                        </select>
                    </div>

                   <div class="col-md-3">
                        <label for="data_moris" class="form-label"></label>
                        <input type="date" class="form-control" name="data_moris">
                    </div>

                    <div class="col-md-3">
                        <label for="nu_telefone" class="form-label">Nu Telefone</label>
                        <input type="number" class="form-control" name="nu_telefone" >
                    </div>
                    <div class="col-md-3">
                        <label for="emis" class="form-label">Emis</label>
                        <input type="text" class="form-control" name="emis" >
                    </div>
                   <div class="col-md-3 p-3">
                        <button type="submit" name="gravar" class="btn btn-primary">Save</button>
                        <button href="index.php" class="btn btn-warning" >Kansela</button>
                    </div>
               
            </form>
            <?php
        }
        if(isset($_GET['edit'])){
            $id_estudante = $_GET['edit'];
            $dados_estudante = select_table("t_estudante WHERE id_estudante = '$id_estudante' ");
            foreach($dados_estudante as $a){
    ?>
<div class="container">
    <div class="alert alert-info d-flex mt-2">
    <h2>Updated dadus Estudante</h2>
    </div>

<div class="row justify-content-center item-center">
    <form action="index.php" method="post">
         <input type="text" name="id_estudante" value="<?= $a['id_estudante']?>" hidden>
            <div class="col-md-3">
                <label for="naran_estudante" class="form-label">Naran Estudante</label>
                <input type="text" class="form-control" name="naran_estudante" value="<?=$a['naran_estudante']; ?>">
            </div>
            <div class="col-md-3">
                <label for="sexo" class="form-label" >Sexu</label>
                <select name="sexo" class="form-control" id="sexo">
                    <?php if($a['sexo'] == 'Mane'){
                        echo "<option value='Mane' selected>Mane</option>
                        <option value='Feto'>Feto</option>";
                    }else if($a['sexo'] == 'Feto'){
                        echo "<option value='Mane'>Mane</option>
                        <option value='Feto' selected>Feto</option>";
                    } ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="data_moris" class="form-label">Loron Moris</label>
                <input type="date" class="form-control" name="data_moris" value="<?= $a['data_moris']; ?>">
            </div>
            <div class="col-md-3">
                <label for="nu_telefone" class="form-label">Nu Telefone</label>
                <input type="number" class="form-control" name="nu_telefone" value="<?= $a['nu_telefone'];?>">
            </div>
            <div class="col-md-3">
                <label for="emis" class="form-label">Emis</label>
                <input type="text" class="form-control" name="emis" value="<?= $a['emis'];?>">
            </div>
           <div class="col-md-3 p-3">
                <button type="submit" class="btn btn-success" name="edit">Update</button>
                <button class="btn btn-warning" href="index.php">Kansela</button>
            </div>
    </form>
    <?php } }?>
        </div>
    </div>
 </div>
<?php include('footer.php'); ?>