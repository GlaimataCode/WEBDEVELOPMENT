 <?php
    include("function.php");
    $dados = select_table('t_materia');
    //input materia
    if(isset($_POST['gravar'])){
        if(!empty($_POST['materia'])){
            $materia = $_POST['materia'];
            $resultadu = insert_materia($materia);
            header('Location: materia.php');
    }
}

//Edit Materia
if(isset($_POST['edit'])){
    $id_materia = $_POST['id_materia'];
    $materia = $_POST['materia'];

    $resultadu = edit_materia($id_materia, $materia);
    header('location: materia.php');
}

//delete materia
if(isset($_GET['delete_id'])){
    $naran_tabela ='t_materia';
    $p_key = 'id_materia';
    $value = $_GET['delete_id'];

    $resultadu = delete_materia($naran_tabela,$p_key,$value);
        header('location: materia.php');
}
    $dados = select_table('t_materia ORDER BY materia ASC');
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
    <h1>Lista Materia</h1>
    <p><a href="index.php">Lista Estudante</a></p>
    <p><a href="materia.php?insert=true">Insert Dadus Materia</a></p>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>MATERIA</th>
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
              <td><?=$a['materia']?></td>
              <td><a href="materia.php?edit=<?= $a['id_materia'] ?>">Edit</a> |
                <a href="materia.php?delete_id=<?= $a['id_materia'] ?>">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    }
    if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
        ?>
        <h2>insert dadus Materia</h2>
        <form action="materia.php" method="post">
            <ul>
                <li>
                    <label for="materia">Materia</label>
                    <input type="text" name="materia">
                </li>
                <li>
                    <button type="submit" name="gravar">Save</button>
                    <button href="materia.php">Kansela</button>
                </li>
            </ul>
        </form>
        <?php
    }
if(isset($_GET['edit'])){
    $id_materia = $_GET['edit'];
            $dados_materia = select_table("t_materia WHERE id_materia = '$id_materia' ");
            foreach($dados_materia as $a){
?>
    <h2>Updated dadus Materia</h2>
        <form action="materia.php" method="post">
        <input type="text" name="id_materia" value="<?= $a['id_materia']?>" hidden>
            <ul>
                <li>
                    <label for="materia">Materia</label>
                    <input type="text" name="materia" value="<?=$a['materia']; ?>">
                </li>
                <li>
                    <button type="submit" name="edit">Update</button>
                    <button href="materia.php">Kansela</button>
                </li>
            </ul>
        </form>
        <?php } } ?>
 </body>
 </html>

