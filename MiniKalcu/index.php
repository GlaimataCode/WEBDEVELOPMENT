<?php
if(isset($_POST['calcular'])){
    $num1 = $_POST['num1'];
    $oper = $_POST['operator'];
    $num2 = $_POST['num2'];

    if(is_numeric($num1) && is_numeric($num2)){
        include('function.php');
        $cal = operator($num1, $num2, $oper);
        $resultadu = "Resultadu Husi $num1 $oper $num2 = $cal";
}else{
    $resultadu ='Dadsu Laos Numeru';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Calculator</title>
</head>
<body>
    <h3>Mini Calculator</h3>

    <form action="" method="post">
        <ul>
            <li>
                <label for="num1">Num 1</label>
                <input type="text" name="num1" id="num1" placeholder="Numeru 1">
            </li>
            <li>
                <label for="operator">Operator</label>
                <select name="operator" id="operator">
                    <option value="" selected hidden>- Hili Operator -</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">/</option>
                </select>
            </li>
            <li>
                <label for="num2">Num 2</label>
                <input type="text" name="num2" id="num2" placeholder="Numeru 2">
            </li>
            <li>
                <input type="submit" name="calcular">
            </li>
            <h4>
                <?= isset($resultadu) ? $resultadu : '' ?>
            </h4>
        </ul>
    </form>
</body>
</html>