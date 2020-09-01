<?php
/*
function getconexao(){ // web 
    $dsn = 'mysql:host=localhost;dbname=id13607804_conversao;charset=utf8';
    $username = 'id13607804_reginaldo';
    $pass = 'n@mCVvsfsFF|>r7V';
    try{
        $pdo = new PDO($dsn, $username, $pass);
        return $pdo;
    }catch(PDOException $ex){
        echo 'Erro :' .$ex->getMessage();
    }
} */

/*
function getconexao(){
$dsn = 'mysql:host=localhost;dbname=vendas';
$username = 'root';
$pass = '';
$pdo = new PDO($dsn, $username, $pass);
} 




/*
function getconexao(){
$servername = "localhost";
$username = "id13607804_reginaldo";
$password = "n@mCVvsfsFF|>r7V";
$database = "id13607804_conversao";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }*/

/*

function getconexao(){
    $dsn = 'mysql:host=localhost;dbname=conversoa;charset=utf8';
    $username = 'root';
    $pass = '';
    try{
        $pdo = new PDO($dsn, $username, $pass);
        return $pdo;
    }catch(PDOException $ex){
        echo 'Erro :' .$ex->getMessage();
    }
}*/

function getconexao(){
    $dsn = 'mysql:host=localhost;dbname=vendas;charset=utf8';
    $username = 'root';
    $pass = '';
    try{
        $pdo = new PDO($dsn, $username, $pass);
        return $pdo;
    }catch(PDOException $ex){
        echo 'Erro :' .$ex->getMessage();
    }
}

function fechaConexao($conn){
    $fecha=mysqli_close($conn);
    if(!$fecha){
        echo "nao fechou a conexao!";
        return false;
    }else{
        return true;
    }

}

?>
