<!DOCTYPE html>
<?php
require_once("../php/BEconexao_pdo.php");
require_once("../php/BEgrud.php");

if(isset($_POST["concurso"])){
  
echo  $concurso = $_POST["concurso"]."<br>";
     
  $nomejogo = $_POST["nomejogo"];    
  
  $d1   = $_POST["d1"];
  $d2   = $_POST["d2"];
  $d3   = $_POST["d3"];
  $d4   = $_POST["d4"];
  $d5   = $_POST["d5"];
  $d6   = $_POST["d6"];
  $d7   = $_POST["d7"];
  $d8   = $_POST["d8"];
  $d9   = $_POST["d9"];
  $d10  = $_POST["d10"];
  $d11  = $_POST["d11"];
  $d12  = $_POST["d12"];
  $d13  = $_POST["d13"];
  $d14  = $_POST["d14"];
  $d15  = $_POST["d15"];
      
  if ($concurso <> ''){    
      $dezenas = [$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10,$d11,$d12,$d13,$d14,$d15];
     /* $contagem = count($dezenas)-1;
      for ($i=0; $i <= $contagem ; $i++) {
         if(is_array($dezenas)){  
            echo ",".$dezenas[$i];
         }
       }*/
      foreach($dezenas as $deze){
          echo " - ".$deze;
      }
  }else{
      echo "vazia";
  }
  echo ' '."<br>" ;   
  $dezenasbco[] = '';
  $linha = 0;
  $conn = getconexao();
  $sql= "SELECT dezena,concurso FROM lotofacil order by concurso ";
  $result = $conn->prepare($sql);
  $result->execute();
// enquanto for o mesmo codigo faca  

   
  while($row = $result->fetch(PDO::FETCH_ASSOC)){
     //  while($concurso == 'concurso'){ 
        if(is_array($row)){
            echo '  -'. $row['dezena'];
            array_push($dezenasbco,$row['dezena']); 
            
           }else{
             echo "nao array";
           }
 // }
 }     // fim do faca
    
  $result_repetido = array_intersect($dezenas,$dezenasbco);
    echo 'repetido';
    foreach($result_repetido as $rep){
        ?>
        <html>  
           <div>
            <?php
               echo "  repetidos   ". $rep; 
             ?>
            </div>
        </html>
        <?php
    }
    
    $result_diferente = array_diff($dezenas,$dezenasbco);
     foreach($result_diferente as $dif){
        ?>
        <html>  
           <div>
            <?php
               echo "  dif   ". $dif; 
             ?>
            </div>
        </html>
        <?php
    }
    /*
    $result_ass = array_intersect_assoc($dezenas,$dezenasbco);
      foreach($result_ass as $asso){
        ?>
        <html>  
           <div>
            <?php
               echo "  asssoc ". $asso; 
             ?>
            </div>
        </html>
        <?php
    }*/
}


$array = $dezenasbco ;//array(1, "ola", 1, "mundo", "ola");
$varias = array_count_values($array);

    ?>
    <html>
      <pre>
          <?php
            print_r($varias) ;
           ?>
      </pre>
       
</html>
    <?php
// var_dump($varias);
/* foreach($varias as $dupl){
    echo ' . '.$dupl;
}*/
/*
Crie uma variável para armazenar o identificador da linha anterior.

$id = -1; // Um valor que nunca vai existir no banco 
while($row = mysql_fetch_array($result)) { 
 $currentId = $row["id"];
 if($id == -1) { 
    // Primeiro registro lido
 } else {
   if($id != $currentId) { 
        // ID diferente, adicione a quebra 
 } else { 
   // Mesmo ID, liste os dados 
 }
 }
   $id = $currentId; 
 }

Dependendo do caso vc pode armazenar toda a linha anterior numa variável.

$oldRow = null; while($row = mysql_fetch_array($result)) { if($oldRow == null) { // Primeiro registro lido } else { if($oldRow["id"] != $row["id"]) { // ID diferente, adicione a quebra } else { // Mesmo ID, liste os dados } } $oldRow = $row; }
*/

// https://www.guj.com.br/t/ler-o-proximo-registro-em-uma-query-mysql-no-php/19946/2
?>

<html lang="pt-br"> 
<head>

  <title>Loto facil</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../static/css/stilo.css" rel="stylesheet" type="text/css">
  <script src="../static/js/forminput.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
</head> <!--
<header>
 
  <div id="TEXTO">Jogo da Loto Facil</div>
  <div id="saida">
    <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button>
  </div> 
</header> -->
<body>

  <!----------------------------------inicio div conteiner------------------------------>
  <div class="conteiner">
    <form action="Frlistar.php" method="post">
      <div id="inputCadastro">
        <label>Numero do jogo</label>
        <div>
          <input type="text" name="concurso" placeholder="codigo" size="10">
          <input type="text" name="nomejogo" placeholder="nome do jogo">

        </div>
        <label>dezenas</label>
        <div>
          <input type="text"  class="inpute" name="d1"  value="2" placeholder="1">
          <input type="text"  class="inpute" name="d2"  value="3" placeholder="2">
          <input type="text"  class="inpute" name="d3"  value="4" placeholder="3">
          <input type="text"  class="inpute" name="d4"  value="5" placeholder="4">
          <input type="text"  class="inpute" name="d5"  value="7" placeholder="5">
          <input type="text"  class="inpute" name="d6"  value="9"  placeholder="6">
          <input type="text"  class="inpute" name="d7"  value="10" placeholder="7">
          <input type="text"  class="inpute" name="d8"  value="12" placeholder="8">
          <input type="text"  class="inpute" name="d9"  value="13" placeholder="9">
          <input type="text"  class="inpute" name="d10"  value="15" placeholder="10">
          <input type="text"  class="inpute" name="d11"  value="17" placeholder="11">
          <input type="text"  class="inpute" name="d12"  value="18" placeholder="12">
          <input type="text"  class="inpute" name="d13"  value="21" placeholder="13">
          <input type="text"  class="inpute" name="d14"  value="22" placeholder="14">
          <input type="text"  class="inpute" name="d15"  value="23" placeholder="15">
        </div><br>
          
           <input type="submit" value="Frlistar.php">
           
      </div>
       
        
    </form>
    </div>
  <!-----------udemy sessao 97 433 -----------------------fim da div conteiner------------------------------
  
  
  <script>
    /*var retornocfop = localStorage.getItem('');
    document.getElementById('cfopnfe').value=retornocfop; 
    localStorage.clear();*/
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>

