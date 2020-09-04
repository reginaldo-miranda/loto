<?php
require_once("../php/BEconexao_pdo.php");
require_once("../php/BEgrud.php");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$conn = getconexao();

$sql= "SELECT * FROM lotofacil order by 'concurso'";
$result = $conn->prepare($sql);
$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo $row['concurso'].'  ';
    echo $row['dezena']."<br>";
    
  
}

?>