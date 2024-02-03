<?php
function koneksaun() {
    //Define uluk parametro sira ba koneksaun

    $dsb = 'pgsql:host=localhost;dbname=db_web_development';
    $username = 'postgres';
    $password = 'admin';


        try{
            //Kria instansia PDO (PHP Data Objects) ba PostgreSQL
            $pdo = new PDO($dsb, $username, $password);
            //set PDO error mode ba exception
            $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
            
            //mensagem Sucessu
           
        }catch (PDOException $e){
            echo 'Koneksaun Error: '.$e->getMessage();
            return null;
        }
    }
    function koneksaun_1(){
        $con = pg_connect("host=localhost port=5432 dbname=db_web_development user=postgres password=admin")
        or die("Falla iha KOneksaun");
        return $con;
    }
?>