<?php
require_once("../php/BEconexao_pdo.php");
require_once("../php/BEgrud.php");
if(isset($_POST["d1"])){
  $cdigo = $_POST["codigo"];
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
    
 inserir(array('codigo','d1','d2','d3','d4','d5','d6','d7','d8','d9','d10','d11','d12','d13','d14','d15'),
         array($codigo,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9,$d10,$d11,$d12,$d13,$d14,$d15),"lotofacil");
    
  
}



?>
<!DOCTYPE html>
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
</head>
<header>
  <div id="TEXTO">Jogo da Loto Facil</div>
  <div id="saida">
    <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button>
  </div>
</header>
<body>
    <!--
  <?php if ($msg == 'enviado') : ?>
        <h1> cadastrado com sucesso </h1>
  <?php else : ?>
        <h1>cadastrar</h1>
  <?php endif; ?>
  <!----------------------------------inicio div conteiner------------------------------>
  <div class="conteiner">
    <form action="Frcadastro.php" method="POST">
      <div id="inputCadastro">
        <label>Numero do jogo</label>
        <div>
          <input type="text" name="codigo" placeholder="codigo" size="10">

        </div>
        <label>dezenas</label>
        <div>
          <input type="text"  class="inpute" name="d1"  placeholder="1">
          <input type="text"  class="inpute" name="d2"  placeholder="2">
          <input type="text"  class="inpute" name="d3"  placeholder="3">
          <input type="text"  class="inpute" name="d4"  placeholder="4">
          <input type="text"  class="inpute" name="d5"  placeholder="5">
          <input type="text"  class="inpute" name="d6"  placeholder="6">
          <input type="text"  class="inpute" name="d7"  placeholder="7">
          <input type="text"  class="inpute" name="d8"  placeholder="8">
          <input type="text"  class="inpute" name="d9"  placeholder="9">
          <input type="text"  class="inpute" name="d10"  placeholder="10">
          <input type="text"  class="inpute" name="d11"  placeholder="11">
          <input type="text"  class="inpute" name="d12"  placeholder="12">
          <input type="text"  class="inpute" name="d13"  placeholder="13">
          <input type="text"  class="inpute" name="d14"  placeholder="14">
          <input type="text"  class="inpute" name="d15"  placeholder="15">
        </div><br>
           <button type="submit">Enviar</button>
      </div>

    </form>

  </div>
  <!-----------udemy sessao 97 433 -----------------------fim da div conteiner------------------------------>

  <!----------------------------------fim rodape------------------------------------------>
  <script>
    var retornocfop = localStorage.getItem('');
    /*	document.getElementById('cfopnfe').value=retornocfop; */
    localStorage.clear();
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>