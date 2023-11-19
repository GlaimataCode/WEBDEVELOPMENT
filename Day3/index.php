<?php 
//Array Associativa

//Maneira 1.
    // $naran = Array("Maubere", "Buibere", "Naibere", "Mausoko");

//Maneira 2.
// $naran = ["Maubere", "Buibere", "Naibere", "Mausoko"];
// echo $naran[3];
// var_dump($naran);
//Aumenta Dadus ba Array.
$naran[]= "John";
$naran[]= "Jose";
$naran[]= "Antonio";
$naran[]= "Dario";
$naran[]= "Joe";
$naran[]= "Joel";
$naran[]= "Jaquiel";
// echo $naran[4];

//Repetetion/ Looping : For & Foreach
for($i = 0; $i< count($naran); $i++){
    // echo $naran[$i]."<br>";
}

//foreach
// $exemplu=[1, 2, 3, 4, 5, 6, 7, 8, 9];

// foreach($naran as $x){
//     echo $x."<br>";
// }

// for($i=1; $i< count($naran) ; $i++){
//     echo $naran [$i]."<br>";
// }

// $estudante =[
//     ['Maubere', 26, 'M', 'Fomentu'],
//     ['Mausoko', 36, 'F', 'Tasitolu'],
//     ['Alfy', 28, 'F', 'Pantai Kelapa']
// ];
// var_dump($estudante);

//00 01 02 03
//10 11 12 13
//20 21 22 23
//30 31 32 33

// echo $estudante[2] [3];

// foreach($estudante as $x){
//     echo"Naran : " .$x[0]. "<br>";
//     echo"Tinan : " .$x[1]. "<br>";
//     echo"Sexu : " .$x[2]. "<br>";
//     echo"Hela Fatin : " .$x[3]. "<br>";
//     echo "---------------------------------<br>";
// }


//Associative Array
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
foreach($estudante as $X){
    echo "Naran: ".$X['naran']."<br>";
    echo "Sexu: ".$X['Sexu']."<br>";
    echo "Tinan: ".$X['Tinan']."<br>";
    echo "Hela Fatin: ".$X['Hela Fatin']."<br>";
    echo "--------------------------------------<br>";
}
?>