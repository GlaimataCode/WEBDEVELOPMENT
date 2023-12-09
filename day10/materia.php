 <?php
    include("function.php");
    $dados = select_table('t_materia');    
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
 </head>
 <body>
    <h1>Lista Materia</h1>
    <p><a href="index.php">Lista Estudante</a></p>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>MATERIA</th>
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
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
 </body>
 </html>

