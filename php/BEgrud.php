<?php
//include_once("BEfecha_conexao.php");
include_once("conexao.php");
//include_once("BEinseir_cadastro.php");

function inserir($coluna, $valor, $tabela)
{
    echo ('FUNCAO dentro PDO') . "<br>";
    $conn = getConnection();

    if ((is_array($coluna)) and (is_array($valor))) {
        if (count($coluna) == count($valor)) {
            $inserir = "INSERT INTO {$tabela} (" . implode(', ', $coluna) . ")
            VALUES ('" . implode('\', \'', $valor) . "')";
            $stmt = $conn->prepare($inserir);

            if ($stmt->execute()) {
                echo ('salvo com sucesso') . "<br>";
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


function atualizar($coluna, $valor, $tabela, $where){
    echo ('FUNCAO dentro PDO') . "<br>";
    $conn = getConnection();

    if ((is_array($coluna)) and (is_array($valor))) {
        
        if (count($coluna) == count($valor)) {
            
            $valor_coluna = NULL;
         // COLOCAR ARRAY EM UMA STRING
            for ($i=0;$i<count($coluna);$i++){  
                
                $valor_coluna .="{$coluna[$i]} = '{$valor[$i]}',";
            }
            // tirando a virgula da ultima posicao
            $valor_coluna = substr($valor_coluna,0,-1);
            
            $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
            
           
            $stmt = $conn->prepare($atualizar);

            
            if ($stmt->execute()) {
                echo ('salvo com sucesso') . "<br>";
                // header("location:FRcadastro.php?msg=enviado");
            } else {
                echo "nao salvou";
            }
        } else {
            return false;
        }
    } else {
         $atualizar = "UPDATE {$tabela} ({$coluna}) VALUES ('{$valor}')";
        
        
        $stmt = $conn->prepare($atualizar);
        if ($stmt->execute()) {
            echo "salvo sem arry";
        } else {
            echo "nao salvou sem arry";
        }
        return false;
    }
}

/* https://www.youtube.com/watch?v=9daDPkrfUsk&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=17

teste

atualizar(array("nome","fone", "email"), array("jose","34512222", "jose@gmail.com"), "nome da tabela", "WHERE id = 1");



// https://www.youtube.com/watch?v=9daDPkrfUsk&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=17



/*
function alterar($coluna, $valor, $tabela){
    $conn = getConnection();
    

    $sql = 'UPDATE cadastro SET nomeUsuario = :nUsu ,email = :email ,senha = :senha WHERE id = :id';

    $stmt = $conn->prepare($sql);

    $stmt ->bindParam(':nUsu',$nomeUsuario);
    $stmt ->bindParam(':email',$mail);
    $stmt->bindParam(':senha',$senha);
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
      echo 'Atualizado com sucesso'   ;
    }else{
      echo 'Erro ao salvar'    ;
    }
}*/

function deletar($tabela, $where=NULL){
    
    $sql = "DELETE {$tabela} {$where}";
    $stmt->prepare($sql);
    $stmt->bindParam(":id" , $id);
    if($stmt->execute()){
        echo "apagado com sucesso";
        // fechar o banco
        return true;
    }else{
        echo "Erro ao apgar o aquivo {$sql}";
        return false;
    }
    /*
https://www.youtube.com/watch?v=zRjAqeBkWU8&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=23 
https://www.youtube.com/watch?v=KubuQ8nHWqU&list=PLIZ0d6lKIbVpOxc0x1c4HpEWyK0JMsL49&index=24

teste de svn

$id = $_REQUEST[$id];

delete("nome da tabela", "WHERE id = $id");
}




?>