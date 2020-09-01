<?php
require_once 'conexaoClass.php';
require_once 'funcaoClass.php';
class funcionarioClass {
    private $conn;
    private $objfunc;
    private $idfuncionario;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;
    
    public function __construct() {
        $this->conn = new conexaoClass();
        $this->objfunc = new funcaoClass();
        
     }
     public function __set($atributo, $valor) {
        $this->$atributo = $valor; 
     }
             
     public function __get($atributo) {
         return $this->$atributo;
     }
     
     public function querySeleciona($dados){
         try {
             $this ->idfuncionario = $this->objfunc->base64($dados,2);
             $cst -> $this->conn->conectar()->prepare("SELECT 'idFuncionario','nome', 'email', 'senha' FROM 'funcionario' WHERE 'idFuncionario'= :idFunc;");
             $cst->bindParam(":idFunc", $this->idfuncionario, PDO::PARAM_INT);
             $cst->execute();
             return $cst->fetch();
             
         } catch (Exception $ex) {
             return 'error  '; $ex->getMessage();
         }
         
     }
     
     public function querySelect($dados){
         try {
             $cst -> $this->conn->conectar()->prepare("SELECT 'idFuncionario','nome', 'email', 'senha' FROM 'funcionario';");
             $cst->execute();
             return $cst-fetchAll();
         } catch (Exception $ex) {
             return 'error  '; $ex->getMessage();
         }
     }
     
     public function queryInsert($dados){
         try {
             $this->nome = $this->objfunc->tratarCaracter($dados('$nome'), 1);
             $this->email = $dados('email');
             $this->senha = shal($dados('senha'));
             $this->dataCadastro = $this->objfunc->dataAtual(2);
             $cst = $this->conn->conectar()->prepare("INSERT INTO 'funcionario' ('nome', 'email', 'senha', 'data_cadastro') VALUES (:nome, :email, :senha, :dataCadastro");
             $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
             $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
             $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
             $cst->bindParam(":data", $this->dataCadastro, PDO::PARAM_STR);
             if($cst->execute()){
                 return 'ok';                 
             }else{
                 return 'erro';
             }
         } catch (Exception $ex) {
             return 'error'.$ex->getMessage();
         }
       
     }
     public function queryUpdate($dados){
         try {
             $this->idfuncionario = $this->objfunc->base64($dados('func'),2);
             $this->nome = $this->objfunc->tratarCaracter($dados('$nome'), 1);
             $this->email = $dados('email');
             $cst = $this->conn->conectar()->prepare("UPDATE 'funcionario' SET 'nome' = :nome , 'email = :email WHERE 'idFuncionario'= :idFunc;"); 
             $cst->bindParam(":idFunc", $this->idfuncionario, PDO::PARAM_INT);
             $cst->bindParam(":nome",   $this->nome, PDO::PARAM_STR);
             $cst->bindParam(":email",  $this->email, PDO::PARAM_STR);
             if($cst->execute()){
                 return 'ok';                 
             }else{
                 return 'erro';
             }
         } catch (Exception $ex) {
             return 'error'.$ex->getMessage();
         }
     }
     public function queryDelete($dados){
         try {
             $this->idfuncionario = $this->objfunc->base64($dados('func'),2);
             $cst = $this->conn->conectar()->prepare("DELETE FROM 'funcionario' WHERE 'idFuncionario'= :idFunc;"); 
             $cst->bindParam(":idFunc", $this->idfuncionario, PDO::PARAM_INT);
             if($cst->execute()){
                 return 'ok';                 
             }else{
                 return 'erro';
             }
             
         } catch (Exception $ex) {
             return 'error'.$ex->getMessage();
         }
     }
}

// https://www.youtube.com/watch?v=jb1WHp3k5rE metodos __set
?>
