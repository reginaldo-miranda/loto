<?php session_start(); ?>
<?php
//include_once("BEfecha_conexao.php");
require_once("../php/BEconexao_pdo.php");
//require_once("BEinseir_cadastro.php");

function inserir($coluna, $valor, $tabela){
    echo ('FUNCAO dentro PDO')."<br>"; 
    $conn = getconexao();
    
   if ((is_array($coluna)) and (is_array($valor))) {
        if (count($coluna) == count($valor)) {
            $inserir = "INSERT INTO {$tabela} (" . implode(', ', $coluna) . ")
            VALUES ('" . implode('\', \'', $valor) . "')";
            $stmt = $conn->prepare($inserir);
            
            if ($stmt->execute()) {
                echo('salvo com sucesso')."<br>";
                // header("location:FRcadastro.php?msg=enviado");
            } else {
                echo "nao salvou";
            }
        } else {
            return false;
        }
    } else {
        $inserir = "INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
        $stmt = $conn->prepare($inserir);
        if ($stmt->execute()) {
            echo "salvo sem arry";
        } else {
            echo "nao salvou sem arry";
        }
        return false;
    }
  
}

?>

