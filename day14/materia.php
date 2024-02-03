 <?php
    include("session_config.php");
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
<?php include('header.php'); ?>
 <div class="container-fluid bg-primary text-white text-center p-5">

     <?php   include('menu.php'); ?>

    <?php if(!isset($_GET['insert']) && !isset($_GET['edit'])) {?>
<!-- View Table -->
<div class="alert alert-info d-flex mt-2">
            <h1>Lista Materia</h1>
            <div class="ms-auto">
            <a class="btn btn-success" href="#" target="_blank">Relatoriu</a>
            <a class="btn btn-primary" href="materia.php?insert=true">Insert</a></a>
        </div>
        </div>
    <table id="dt_materia" class="table table-bordered table-hover">
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
              <td><a class="btn btn-warning" href="materia.php?edit=<?= $a['id_materia'] ?>">Edit</a> |
                <a class="btn btn-danger" href="materia.php?delete_id=<?= $a['id_materia'] ?>">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
<!-- end cards -->
    <?php
    }
    if(isset($_GET['insert']) && $_GET['insert'] == 'true'){
        ?>
        <form action="materia.php" method="post">
    <div class="card">
        <div class="card-header">
            <h2>Insert Dadus Materia</h2>
        </div>
  <div class="card-body">
    <div class="mb-3">
        <label for="materia">Materia</label>
        <input type="text" class="form-control" name="materia">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="gravar">Save</button>
        <button class="btn btn-danger" href="materia.php">Kansela</button>
  </div>
  </div>
</div>
</form>
        <?php
    }
if(isset($_GET['edit'])){
    $id_materia = $_GET['edit'];
            $dados_materia = select_table("t_materia WHERE id_materia = '$id_materia' ");
            foreach($dados_materia as $a){
?>
   <div class="card">
  <div class="card-header">
    <h2 class="card-title">Updated dadus Materia</h2>
  </div>
  <div class="card-body">
    <form action="materia.php" method="post">
    <input type="text" name="id_materia" value="<?= $a['id_materia']?>" hidden>
    <div class="mb-3">
        <label for="materia">Materia</label>
        <input type="text" class="form-control" name="materia" value="<?=$a['materia']; ?>">
    </div>
    <div class="mb-3 md-6">
        <button class="btn btn-info" type="submit" name="edit">Update</button>
        <button class="btn btn-danger" href="materia.php">Kansela</button>
    </div>
  </div>
</div>
        </form>
        <?php } } ?>
    </div>
    </div>
<?php include('footer.php'); ?>