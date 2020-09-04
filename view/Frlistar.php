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

$lotofixa=
    [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,233,24,25];

/*$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);*/
?>