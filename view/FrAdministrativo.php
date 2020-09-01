<?php session_start();?>
<?php require_once("../php/BEconexao_pdo.php");
      
      if ( !isset($_SESSION["autenticar"])){
             header("location:\projetovendas\index.php");
             exit;
      }
  ?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Sisvendas</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="../static/css/stilo.css" rel="stylesheet" type="text/css">
    
   <!-- <link href="../static/css/estiloMenuAdm.css" rel="stylesheet" type="text/css"> -->

    <script src="../static/js/forminput.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>

</head>
<header>
    <div id="TEXTO">Vendas -  Administrativo</div>

     <div id="saida">
       <!-- <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button> -->
        <a href="../sair.php">sair<b></b></a> 
    </div>

</header>

<body>


    <div class="conteiner">
      
        <form name="BEgravarLogin" action="" method="post">
              <?php
               // require_once("../php/BEexMenuSubMenuAdm.php");
                require_once("../php/BEMenuSubMenuAdm.php");
               ?>

        </form>
       
    </div>
    <!--fim conteiner-->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>



<!-- https://pt.stackoverflow.com/questions/154065/como-passar-dados-de-um-input-para-outro-com-html-e-javascript  -->

<!--https://www.youtube.com/watch?v=x-4z_u8LcGc&t=769s-->

<!--site de cores site fletuicolors-->

<!---https://cosmos.bluesoft.com.br/  site de pesquisas cfop ncm csosn-->

<!--https://www.youtube.com/watch?v=GtsNZtzZiec-->