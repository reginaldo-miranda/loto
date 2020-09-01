<?php

class conexaoClass {

    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;

    public function __construct() {
        $this->servidor = "localhost";
        $this->banco = "vendas";
        $this->usuario = "root";
        $this->senha = "";
    }

    function conectar() {
        if (is_null(self::$pdo)) {
            self::$pdo = new PDO("mysql:host=" . $this - servidor . ":dbname=" . $this->banco, $this->usuario, $this->senha);
        }
        return self::$pdo;
        try {
            
        } catch (PDOException $ex) {
            
        }
    }

}
?>