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
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
 </head>
 <body>
    <?php if(!isset($_GET['insert']) && !isset($_GET['edit'])) {?>
    <h1>Lista Estudante</h1>
    <p><a href="materia.php">Lista Materia</a></p>
    <p><a href="index.php?insert=true">Insert Dadus Estudante</a></p>
    <table border="1">
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
                <a href="index.php?edit=<?= $a['id_estudante'] ?>">Edit</a>|
                <a href="index.php?delete=true">Delete</a>
             </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    }
        if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
            ?>
            <h2>insert dadus Estudante</h2>
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

    <h2>Updated dadus Estudante</h2>
    <form action="index.php" method="post">
        <ul>
            <li>
                <label for="naran_estudante">Naran Estudante</label>
                <input type="text" name="naran_estudante" value="<?=$a['naran_estudante']; ?>">
            </li>
            <li>
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo">
                    <?php if($a['sexo'] == 'Mane'){
                        echo '<option value="Mane" selected>Mane</option>
                        <option value="Feto">Feto</option>';
                    }else if($a['sexo'] == 'Feto'){
                        echo '<option value="Mane">Mane</option>
                        <option value="Feto" selected>Feto</option>';
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
                <button type="submit" name="gravar">Save</button>
                <button><a href="index.php">Kansela</a></button>
            </li>
        </ul>
    </form>
    <?php } }?>
 </body>
 </html>

