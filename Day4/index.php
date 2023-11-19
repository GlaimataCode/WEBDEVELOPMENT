<?php 
//variavel Scope
//local
// $x = 12;
// echo $x;
//global
// function hamosuX(){
//     global $x;
//     echo $x;
// }
// hamosuX();

//superglobal
//bele uza iha fatin ne'ebe deit;
//bele uza bainhira deit;
//sem deklara fali


// var_dump($_SERVER);
// echo $_SERVER['HTTP_HOST'];

//get
// $_GET['naran']='Matcho';
// var_dump($_GET);

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

$naran = 'Matcho';

?>
<!DOCTYPE html>
<head>
    <title>Aprende GET</title>
</head>
<body>
    <h1>Pajina 1</h1>
    <p>Ida ne'e mak Hatudu Link ba Mai</p>
    <a href="Aprende1.php?naran=<?= $naran?>">Klik iha Ne'e</a>

</body>
</html>