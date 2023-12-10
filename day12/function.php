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

    function insert_estudante($naran_estudante,$sexo,$data_moris,$nu_telefone){
      global $kon;
    // Query 
      $query = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telefone)
      VALUES('$naran_estudante','$sexo','$data_moris','$nu_telefone')";
  
      //prepare no Executa
      $sql = $kon -> prepare($query);
      $sql -> execute();
      }

      function insert_materia($materia){
        global $kon;
      // Query 
        $query = "INSERT INTO t_materia(materia)
        VALUES('$materia')";
    
        //prepare no Executa
        $sql = $kon -> prepare($query);
        $sql -> execute();
        }
        function edit_estudante($id_estudante, $naran_estudante,$sexo,$data_moris,$nu_telefone){
          global $kon;
        // Query 
          $query = "UPDATE t_estudante SET naran_estudante='$naran_estudante', sexo='$sexo', data_moris='$data_moris', nu_telefone='$nu_telefone'
          WHERE id_estudante='$id_estudante'";
      
          //prepare no Executa
          $sql = $kon -> prepare($query);
          $sql -> execute();
          }

?>