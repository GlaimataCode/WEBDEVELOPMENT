<?php 
    //Build-In Function

    //String Function:
    $OriginalSrting = "Hello, World!";
    //echo strlen($OriginalSrting);
    // echo str_replace("World", "PHP", $OriginalSrting);
    // echo strtolower($OriginalSrting);
    // echo strtoupper($OriginalSrting);
    // echo ucfirst($OriginalSrting);


    //Math Function
    // $number = -5.75;
    // echo abs($number);

    $number = 25;
    // echo sqrt($number);
    // echo round(4.5);
    // echo round(4.6);
    // echo pow(2, 3);
    // echo ceil(4.2);
    // echo floor(4.8);
    // echo rand(1, 10);
    // echo mt_rand(1, 100);

    // Date and Timr Function
    // echo date('d-m-Y');
    // $timestamp = strtotime('next Sunday');
    // echo date('Y-m-d', $timestamp);

    // File System Functions:
    $file_nia_naran = 'file_koko.txt';
    $kria_file = fopen($file_nia_naran, 'w'); //kria dados

    $dados = 'Diak ka Lae Brow!';
    file_put_contents($file_nia_naran, $dados); //Rai Dadus

    $content = file_get_contents($file_nia_naran); //hodi Lee dadus
    echo $content;
?>