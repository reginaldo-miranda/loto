<?php
require_once("../php/BEconexao_pdo.php");
require_once("../php/BEgrud.php");


$conn = getconexao();

$sql= "SELECT * FROM lotofacil order by 'codigo'";
$result = $conn->prepare($sql);
$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo $row['d1']."<br>";
    echo $row['d2']."<br>";
    echo $row['d3']."<br>";
    echo $row['d4']."<br>";
    echo $row['d5']."<br>";
    echo $row['d6']."<br>";
    echo $row['d7']."<br>";
    echo $row['d8']."<br>";
    echo $row['d9']."<br>";
    echo $row['d10']."<br>";
    echo $row['d11']."<br>";
    echo $row['d12']."<br>";
    echo $row['d13']."<br>";
    echo $row['d14']."<br>";
    echo $row['d15']."<br>"."<br>";
    
   for ($i = 1; $i <= 15; $i++) {
    if ('d1' == 'd3'){
        echo 'igual';
    }else{
        echo 'nao';
    }
}
}
?>