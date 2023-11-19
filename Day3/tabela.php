<?php 
$estudante =[
    [
        'naran'=> 'Maubere', 
        'Tinan'=>'26', 
        'Sexu'=>'M',
        'Hela Fatin'=>'Fomentu'
    ],
    [
        'naran'=> 'Julia', 
        'Tinan'=>'22', 
        'Sexu'=>'F',
        'Hela Fatin'=>'Maliana'
    ],
];
?>
<!DOCTYPE html>
<head>
    <title>Tabela</title>
</head>
<body>
    <h1>Tabela Estudante</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nu</th>
                <th>Naran</th>
                <th>Sexu</th>
                <th>Tinan</th>
                <th>HelaFatin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                $no=1;
                foreach($estudante as $x){?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$x['naran']?></td>
                        <td><?=$x['Sexu']?></td>
                        <td><?=$x['Tinan']?></td>
                        <td><?=$x['Hela Fatin']?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>