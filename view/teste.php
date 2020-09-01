<html>
    <pre>
<?php 
/* include_once("conexao.php");
 // require("inserir.php");
require('inserir.php');

    
  /* $nome = "jose carlos";
    $email = "joseC@gmail.com";
    $senha = "321";
    $id    = 1;*/
// inserir(array("nomeUsuario","email","senha"), array("jose joao","zeca@gmail.com","1234"), "usuarios");
 /* atualizar(array("nomeUsuario","email","senha"),array("jose car","jc@gmail.com","321"),"usuarios", "where idUsusario = 1");


$c1 = 1;
$c2 = 3;
$c3 = 11;
$c4 = 15;
$c5 = 19;
$c6 = 44;
$sena = array($c1,$c2,$c3,$c4,$c5,$c6);

foreach($sena as $ganhei){
   echo "$ganhei" ."<br>";
   // print_r($sena);
   // var_dump($sena);

  //  echo count($sena);
}*/

 $dezenas = array("1", "3", "5", "6", "7", "9", "10", "12", "15", "18", "19", "20", "21" ,"23", "24", "25");

//$dezenas = array("2", "10", "15", "16", "18", "20", "21");

function combinacoesDe($k, $xs){
     if ($k === 0)
         return array(array());
     if (count($xs) === 0)
         return array();
     $x = $xs[0];
     $xs1 = array_slice($xs,1,count($xs)-1);
     $res1 = combinacoesDe($k-1,$xs1);
     for ($i = 0; $i < count($res1); $i++) {
         array_splice($res1[$i], 0, 0, $x);
     }
     $res2 = combinacoesDe($k,$xs1);
     return array_merge($res1, $res2);
}


print_r(combinacoesDe(15,$dezenas));






?>
</pre>
</html>