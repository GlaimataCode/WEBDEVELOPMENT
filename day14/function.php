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
//function insert estudante
    function insert_estudante($naran_estudante,$sexo,$data_moris,$nu_telefone, $emis){
      global $kon;
    // Query 
      $query = "INSERT INTO t_estudante(naran_estudante, sexo, data_moris, nu_telefone, emis)
      VALUES('$naran_estudante','$sexo','$data_moris','$nu_telefone', '$emis')";
  
      //prepare no Executa
      $sql = $kon -> prepare($query);
      $sql -> execute();
      }

      //function insert materia
      function insert_materia($materia){
        global $kon;
      // Query 
        $query = "INSERT INTO t_materia(materia)
        VALUES('$materia')";
    
        //prepare no Executa
        $sql = $kon -> prepare($query);
        $sql -> execute();
        }

        //function edit estudante
        function edit_estudante($id_estudante, $naran_estudante,$sexo,$data_moris,$nu_telefone, $emis){
          global $kon;
        // Query 
          $query = "UPDATE t_estudante SET naran_estudante='$naran_estudante', sexo='$sexo', data_moris='$data_moris', nu_telefone='$nu_telefone', emis='$emis'
          WHERE id_estudante='$id_estudante'";
      
          //prepare no Executa
          $sql = $kon -> prepare($query);
          $sql -> execute();
          }
  
//function edit Materia
function edit_materia($id_materia, $materia){
  global $kon;
// Query 
  $query = "UPDATE t_materia SET materia='$materia'
  WHERE id_materia='$id_materia'";

  //prepare no Executa
  $sql = $kon -> prepare($query);
  $sql -> execute();
  }

  //function delete estudante
  function delete($naran_tabela, $p_key, $value){
    global $kon;
      $sql = "DELETE FROM $naran_tabela WHERE $p_key = '$value'";
      $dados = $kon->prepare($sql);
      $dados->execute();
  }

  //function delete materia
  function delete_materia($naran_tabela, $p_key, $value){
    global $kon;
      $sql = "DELETE FROM $naran_tabela WHERE $p_key = '$value'";
      $dados = $kon->prepare($sql);
      $dados->execute();
  }


  //function utilizador
  function insert_utilizador($id_estudante, $password, $user_level){

  global $kon;
      // Query 
        $query = "INSERT INTO t_utilizador(id_estudante,password, user_level)
        VALUES('$id_estudante', '$password', '$user_level')";
    
        //prepare no Executa
        $sql = $kon -> prepare($query);
        $sql -> execute();
  }
 function edit_utilizador($id, $id_estudante, $password, $user_level){
  global $kon;
// Query 
  $query = "UPDATE t_utilizador SET id_estudante='$id_estudante', password='$password', user_level='$user_level'
  WHERE id_utilizador='$id' ";

  //prepare no Executa
  $sql = $kon -> prepare($query);
  $sql -> execute();
  }

  //tabela statistik
  function table($query)
{
    global $kon;
    $sql = "$query";
    $dados = $kon->prepare($sql);
    $dados->execute();
    return $dados->fetchAll(PDO::FETCH_ASSOC);
}
function aula_table($naran_table)
{
    global $kon;
    $sql = "SELECT * FROM $naran_table";
    $dados = $kon->prepare($sql);
    $dados->execute();
    return $dados->fetchAll(PDO::FETCH_ASSOC);
}
function insert_aula($id_estudante, $id_materia)
{
    global $kon;
    $sql = "INSERT INTO t_aula(id_estudante, id_materia) VALUES('$id_estudante', '$id_materia')";
    $dados = $kon->prepare($sql);
    $dados->execute();
}

function edit_aula($id_aula, $id_estudante, $id_materia)
{
    global $kon;
    $sql = "UPDATE t_aula SET id_estudante='$id_estudante', id_materia='$id_materia' WHERE id_aula='$id_aula'";
    $dados = $kon->prepare($sql);
    $dados->execute();
}
function delete_aula($naran_tabela,$p_key,$value){
  global $kon;
      $sql = "DELETE FROM $naran_tabela WHERE $p_key = '$value'";
      $dados = $kon->prepare($sql);
      $dados->execute();
}
?>