<?php
function operator($num1, $num2, $oper){
    switch($oper){
        case '+':
            $calcula = $num1 + $num2;
            break;
            case '-':
                $calcula = $num1 - $num2;
            break;
            case '*':
                $calcula = $num1 * $num2;
            break;
            case '/':
                if($num2 == 0){
                    $calcula = "Undefined";
                } else{
                    $calcula = $num1 / $num2;
                }
                break;
            default:
                $calcula ='Operator La Existe';
                break;
    }
    return $calcula;
}
?>