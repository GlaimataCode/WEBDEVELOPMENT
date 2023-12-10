 <?php
    include("function.php");
    $dados = select_table('t_materia');
    
    if(isset($_POST['gravar'])){
        if(!empty($_POST['materia'])){
            $materia = $_POST['materia'];
            $resultadu = insert_materia($materia);
            header('Location: materia.php');
    }
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
              <td><a href="materia.php?edit=true">Edit</a>|
                    <a href="materia.php?delete=true">Delete</a>
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
?>
    <h2>Updated dadus Materia</h2>
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
        <?php } ?>
 </body>
 </html>

