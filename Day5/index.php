 <?php
    
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
 </head>
 <body>
        <!-- Parte Formulariu nian -->
        <h1>Formulariu Registrasaun Estudante !</h1>
        <form action="" method="post">
            <label>Naran Kompletu :</label>
            <input type="text" name="naran">
            <br>
            <label>Sexu :</label>
            <select name="Sexu">
                <option selected hidden>Hili Jeneru</option>
                <option value="mane">Mane</option>
                <option value="feto">Feto</option>
            </select>
            <br>
            <label>Hela Fatin :</label>
            <textarea type="text" name="hela_fatin" cols="30" rows="2"></textarea>
            <br>
            <label>Data Moris :</label>
            <input type="date" name="data_moris">
            <br>
            <button type="submit" name="haruka">Registu</button>
            <br><br>

            <!-- Lojika Rai Dadus -->
            <?php if(isset($_POST['haruka'])) :?>
            <!-- Taka Lojika -->

            <!-- parte Tabela nian -->
            <table border="1">
                <thead>
                    <tr>
                        <th>Naran</th>
                        <th>Sexu</th>
                        <th>Data Moris</th>
                        <th>Hela Fatin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$_POST['naran']; ?></td>
                        <td><?=$_POST['Sexu']; ?></td>
                        <td><?=$_POST['data_moris']; ?></td>
                        <td><?=$_POST['hela_fatin']; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php endif;?>
            <!-- Taka Tabela -->
        </form>

 </body>
 </html>