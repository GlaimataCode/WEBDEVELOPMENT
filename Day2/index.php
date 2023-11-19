<?php 

//Operators

//1. Arithmetic(+ - * / %)
/*
$X=12;
$Y=2;

echo $Y;


//2. concatenate
$naran ="Matcho ";
$apelido = "Elmart";
echo $naran  .$apelido;
*/

//3. Assigment (=, +=, -=, x=, /=, %= .=)

// $dados = 5;


//4. Coparison (<,>,<==,>= ==, !=)
// $a =20;
// // $b =223456;
// $c =21;

// var_dump($a <=20);
// var_dump($a == $b);

//5. Identity (===, !==)
// $a =20;
// $c =21;
// var_dump($a === $c);

//Logic (&&, ||, !)
/*
T && T = T
T && F = F
F && T = F
F && F = F */

// $x =6;

// var_dump($x < 10 && $x + 2 == 8);
/*
T || T = T
T || F = T
F || T = T
F || F = F */

// $X =4;
// var_dump(!($X < 10) || $X + 2 == 8);


//Control Flow
//1. Repetisaun
//1.1. For
 /* 
        for (
            inicialization, condition, increment/decrement{
                durante kondisaun true, sei repete ida ne'e.
            }
        )

        Increment =$i++ = +1
        Decrement=$i-- = -1

    */
/*

for($i =1; $i <=10; $i++){
   echo $i .".  Diak ka Le?<br>";
}

//1.2. While
$i =1;
while($i <=10){
    echo "Hau diak<br>";
    $i++;
}*/
/*
//1.3. do while (Executa uluk variavel hafoin check kondisaun)
$k =1;
do{
    echo $k .".  Matcho Araujo<br>";
    $k++;
}while($k <= 10);
*/

//1.4. foreach( Sei Aprende iha Array nian)


//===================================
//2. Condition
//2.1.If, elseif no  Else
//2.2. Ternary
//2.3. Switch : Case no Break

$tinan=20;
if($tinan > 0 && $tinan <=17){
    // echo "Labele Namora Lai Ama Siak";
}elseif($tinan > 17 && $tinan <=24){//18-24
    // echo "Bele Maibe Hafuhu Malu Hela";
}else{
    // echo "Bele Ona, Tamba Tuan Ona";
}

//Ternary
$Sexo = "M";
$a = ($Sexo == "M") ? "Sr." : "Sra.";
// echo "Bemvindu Mai Hau nia Web $a";

//switch
$loron = date("l");
    switch($loron){
        case"Sunday":
            echo "Ohin Loron Domingu, ".date("d-m-Y");
        break;
        case"Monday":
            echo "Ohin Loron Segunda-Feira, ".date("d-m-Y");
        break;
        case"Tuesday":
            echo "Ohin Loron Tersa-Feira, ".date("d-m-Y");
        break;
        case"Wednesday":
            echo "Ohin Loron Kuarta-Feira, ".date("d-m-Y");
        break;
        case"Thusday":
            echo "Ohin Loron Kinta-Feira, ".date("d-m-Y");
        break;
        case"Friday":
            echo "Ohin Loron Sexta-Feira, ".date("d-m-Y");
        break;
        case"Saturday":
            echo "Ohin Loron Sabadu, ".date("d-m-Y");
        break;
    } 
    echo "<br>";

    //switch case no brak mos uza, oinsa Jere Valor Estudante iha Periodu Exame final liu ka la Liu.

    $valor ="A";
    switch($valor){
        case "A";
        case "B";
        case "C";
        echo "Passa";
        break;
        case "D";
        echo "Recursu";
        break;
        case "E";
        echo "La Passa";
        break;
        default;
        echo "La Eziste";
        break;
    }
?>