<?php
 include("koneksaun.php");
 $kon = koneksaun();

 function select_table($naran_tabela){
    global $kon;
  // Query 
    $query = "SELECT * FROM  $naran_tabela";

    //prepare no Executa
    $sql = $kon -> prepare($query);
    $sql -> execute();

    $resultado = $sql -> fetchALL(PDO::FETCH_ASSOC);
    return $resultado;
    }

?>