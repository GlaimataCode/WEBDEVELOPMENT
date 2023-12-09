<?php 
// User Define Functions
    function koko(){
        echo 'Diak Ka Lae Brow!';
    }
    // koko();

    //Parameters
    function soma($a, $b, $d){
        $c = $a + $b * $d;
            echo $c;
        }
    // soma(5, 5, 2);

    // Function with Default Parameter

    function halokafe($type = "Cappuccino")
    {
        return "Halo Kafe ida Konaba $type.";
    }
    // echo halokafe();
    // echo halokafe("ExPresso");
    // echo halokafe("ToraBika");
    // echo halokafe("WhiteCoffee");
    echo halokafe("Good Day");
    // echo halokafe(null);
?>