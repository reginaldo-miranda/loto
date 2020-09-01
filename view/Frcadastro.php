<?php
include_once "BEvalidalogim.php";
//system("TZ=BRT date");
//date_default_timezone_set('America/Sao_Paulo');
//ini_set('date.timezone', 'America/Sao_Paulo');
$tipoplano    = $_SESSION['tipoplano'];
$duracao      = $_SESSION['duracao']; // vem da tabela plano 
//$data_venc    = 
$valor        = $_SESSION['valor'];
$email        = $_SESSION['semail'];
$senha        = $_SESSION['ssenha'];
$dataabertura = $_SESSION['dataabertura']; // antiga datainicio
$verifica     = $_SESSION['existecadastro'];// $data_venc = $_SESSION['data_venc'];// $row_msg_cont['data_venc'];
$empresa      = '';
$cnpj         = '';
$msg          = 0;
@$msg         = $_REQUEST['msg'];

echo('senha cadastro :'.$senha);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Converter CFOP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../static/css/stilo.css" rel="stylesheet" type="text/css">
  <script src="../static/js/forminput.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
</head>
<header>
  <div id="TEXTO">Conversão de dados para venda - SIMPLES NACIONAL - Comercio-Revenda - Cadastro de Clientes</div>
  <div id="saida">
    <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button>
  </div>
</header>
<body>
  <?php if ($msg == 'enviado') : ?>
        <h1> cadastrado com sucesso </h1>
      <?php else : ?>
        <h1>cadastrar</h1>
      <?php endif; ?>
  <!----------------------------------inicio div conteiner------------------------------>
  <div class="conteiner">
    <form action="BEinserir_cadastro.php" method="POST">
      <div id="inputCadastro">
        <label>Codigo</label>
        <div id="inputCodigoCadastro">
          <input type="text" class="inpute" name="codigo" placeholder="codigo">
          <input type="text" id="data_abertura" class="inpute" name="data_abertura" placeholder="data" value="<?php echo $dataabertura; ?>">
        </div>
        <label>Empresa:</label>
        <div id="inputEmpresa">
          <input type="text" id="empresa" class="inpute" name="empresa" topo.phpname="empresa" placeholder="Empresa">
          <input type="text" id="cnpj" class="inpute" name="cnpj" placeholder="cnpj">
        </div>
        <label>Nome:</label>
        <div id="inputNome">
          <input type="text" id="nome_contato" class="inpute" name="nome_contato" placeholder="Nome contato">
        </div>
        <label>Fone:</label>
        <div id="inputFone">
          <input type="text" id="fone" class="inpute" name="fone" placeholder="fone">
          <input type="text" id="fone2" class="inpute" name="fone2" placeholder="fone 2">
        </div>
        <label>Email:</label>
        <div id="inputEmail">
          <input type="text" id="email" class="inpute" name="email" placeholder="Email" value="<?php echo $email; ?>">
        </div>
        <label>Tipo de Plano</label>
        <label>Valor</label>
        <div id="inputplano">
          <input type="text" id="tipo_plano" class="inpute" name="tipo_plano" readonly=true placeholder="tipo_plano" value="<?php echo $tipoplano; ?>">
          <!-- </div> -->
          <div>
            <input type="text" id="valor" class="inpute" name="valor" readonly=true placeholder="valor " value="<?php echo $valor; ?>">
          </div>
        </div>
        <label>vencimento</label>
        <div>
          <input type="text" id="duracao" class="inpute" name="duracao" readonly=true placeholder="liberado apos o pagto" value="<?php echo $duracao; ?>">
        </div>
        <button type="submit" name="enviar">Enviar</button>
      </div>
    </form>
  </div>
  <!----------------------------------fim da div conteiner------------------------------>
  <?php include_once "BEfooter.php" ?>
  <!----------------------------------fim rodape------------------------------------------>
  <script>
    var retornocfop = localStorage.getItem('cfopenco');
    /*	document.getElementById('cfopnfe').value=retornocfop; */
    localStorage.clear();
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>