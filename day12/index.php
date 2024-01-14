 <?php
    include("function.php");
    $dados = select_table('t_estudante');
    
    if(isset($_POST['gravar'])){
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];
        $nu_telefone = $_POST['nu_telefone'];

        $resultadu = insert_estudante($naran_estudante,$sexo,$data_moris,$nu_telefone);
        header('Location: index.php');
    }
    if(isset($_POST['edit'])){
        $id_estudante = $_POST['id_estudante'];
        $naran_estudante = $_POST['naran_estudante'];
        $sexo = $_POST['sexo'];
        $data_moris = $_POST['data_moris'];
        $nu_telefone = $_POST['nu_telefone'];

        $resultadu = edit_estudante($id_estudante, $naran_estudante,$sexo,$data_moris,$nu_telefone);
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
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <h1>BEMVINDU</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="materia.php">Materia</a>
            </li>
        </ul>
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
            <h2>insert dadus Estudante</h2>
            </div>
            
            <form action="index.php" method="post">
                <ul>
                    <li>
                        <label for="naran_estudante">Naran Estudante</label>
                        <input type="text" name="naran_estudante">
                    </li>
                    <li>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo">
                            <option value="" selected hidden>. Hili Sexu .</option>
                            <option value="Mane">Mane</option>
                            <option value="Feto">Feto</option>
                        </select>
                    </li>
                    <li>
                        <label for="data_moris"></label>
                        <input type="date" name="data_moris">
                    </li>
                    <li>
                        <label for="nu_telefone">Nu Telefone</label>
                        <input type="number" name="nu_telefone" >
                    </li>
                    <li>
                        <button type="submit" name="gravar">Save</button>
                        <button><a href="index.php">Kansela</a></button>
                    </li>
                </ul>
            </form>
            <?php
        }
        if(isset($_GET['edit'])){
            $id_estudante = $_GET['edit'];
            $dados_estudante = select_table("t_estudante WHERE id_estudante = '$id_estudante' ");
            foreach($dados_estudante as $a){
    ?>
    <div class="alert alert-info d-flex mt-2">
    <h2>Updated dadus Estudante</h2>
    </div>
  
    <form action="index.php" method="post">
         <input type="text" name="id_estudante" value="<?= $a['id_estudante']?>" hidden>
        <ul>
            <li>
                <label for="naran_estudante">Naran Estudante</label>
                <input type="text" name="naran_estudante" value="<?=$a['naran_estudante']; ?>">
            </li>
            <li>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo">
                    <?php if($a['sexo'] == 'Mane'){
                        echo "<option value='Mane' selected>Mane</option>
                        <option value='Feto'>Feto</option>";
                    }else if($a['sexo'] == 'Feto'){
                        echo "<option value='Mane'>Mane</option>
                        <option value='Feto' selected>Feto</option>";
                    } ?>
                </select>
            </li>
            <li>
                <label for="data_moris"></label>
                <input type="date" name="data_moris" value="<?= $a['data_moris']; ?>">
            </li>
            <li>
                <label for="nu_telefone">Nu Telefone</label>
                <input type="number" name="nu_telefone" value="<?= $a['nu_telefone'];?>">
            </li>
            <li>
                <button type="submit" name="edit">Update</button>
                <button><a href="index.php">Kansela</a></button>
            </li>
        </ul>
    </form>
    <?php } }?>
    </div> 
</body>
 </html>

