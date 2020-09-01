
<?php

include_once("BEfecha_conexao.php");
include_once("BEconexao_pdo.php");


function inserir($coluna, $valor, $tabela) {
    echo ('FUNCAO dentro PDO') . "<br>";
    $conn = getconexao();

    if ((is_array($coluna)) and ( is_array($valor))) {
        if (count($coluna) == count($valor)) {
            $inserir = "INSERT INTO {$tabela} (" . implode(', ', $coluna) . ")
            VALUES ('" . implode('\', \'', $valor) . "')";
            $stmt = $conn->prepare($inserir);

            if ($stmt->execute()) {
                echo('salvo com sucesso') . "<br>";
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

function selecionar($tabela,$coluna = "*", $where=NULL,$ordem=NULL,$limite=NULL){
    $sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";
    if($conexao = connect()){
        if($query = mysql_query($sql,$conexao)){
            if(mysql_num_rows($query)>0){
                $resultado_total = array();
                while ($resultado = mysql_fetch_assoc($query)){
                    $resultado_total[] = $resultado; 
                }
                fechaconexao();
                return $resultado_total;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }else{
        return false;
    }
    
}

function atualizar($coluna, $valor, $tabela, $where){
    
    echo ('FUNCAO dentro PDO') . "<br>";
    $conn = getconexao();

    if ((is_array($coluna)) and ( is_array($valor))) {
        if (count($coluna) == count($valor)) {
            
            $valor_coluna =null;
            
            // colocar array em uma string
            for($i=0;$i<count($coluna); $i++){
                $valor_coluna .= "{$coluna[$i]} = '{$valor[$i]}'," ;

             }
             // tirando a virgula no final
             $valor_coluna = substr($valor_coluna,0,-1);
             $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
            
            
            $stmt = $conn->prepare($atualizar);

            if ($stmt->execute()) {
                echo('salvo com sucesso') . "<br>";
                // header("location:FRcadastro.php?msg=enviado");
            } else {
                echo "nao salvou";
            }
        } else {
            return false;
        }
    } else {
        $atualizar = "UPDATE {$tabela} SET ({$coluna}) '{$valor}' {$where}";
        $stmt = $conn->prepare($atualizar);
        if ($stmt->execute()) {
            echo "salvo sem arry";
        } else {
            echo "nao salvou sem arry";
        }
        return false;
    }
    
}
function excluir(){
    $delete = "DELETE FROM {$tabela} {$where}";
    if ($con = connect()){
        
        if(mysql_query($delete, $con)){
            fechaConexao($con);
            return true;
        }else{
            echo "query invalida {$delete}";
            return false;
        }
    }else{
        return false;
    }
    
}
?>



