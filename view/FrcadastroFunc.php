
 <?php 
    session_start();
    require_once("../php/BEconexao_pdo.php");
    require_once("../php/BEfuncao_inserirPDO.php");
    $conn = getconexao();
    $result_msg_cont = "SELECT * FROM usuario";
    $resultado_msg_cont = $conn->prepare($result_msg_cont);
    $resultado_msg_cont->execute();

      if (isset($_POST["nomeUsuario"]) ){
          $nomeUsuario = $_POST["nomeUsuario"];
          $email       = $_POST['email'];
          $senha       = $_POST["senha"];
          inserir(array('nomeUsuario','email','senha'),array($nomeUsuario,$email,$senha),'usuario'); 
          echo $nomeUsuario . "<br>";
          echo $senha . "<br>"; 
      }
  ?>
 
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Sisvendas</title>
        <!--   // secao 89 unidade 4 listagem
                  sessao 90
                  sessao 20 unidade 6 css -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="../static/css/cssCadasFunc.css" rel="stylesheet" type="text/css">
        <script src="static/js/forminput.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
    </head>
             
    <header>
            <div id="TEXTO">Sistema de Comercio - cadastro funcionario</div>
            <div id="saida">
               <!-- <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button> -->
                <a href="../sair.php">sair<b></b></a> 
            </div>
    </header>

    <body>  <!-- idusuario  nomeUsuario   senha   email -->
        <main>
            <form action="FrcadastroFunc.php" method="post">
            
                  <section class="janela1">
                        <div>
                             <input type="text"   name="nomeUsuario"  placeholder="Digite o seu nome">
                        </div>

                        <div>
                              <input type="email"  name="email" placeholder="Digite o seu email">
                        </div>

                        <div>
                            <input type="password" name="senha" placeholder="Digete a senha">
                        </div>

                        <div>
                            <input type="submit"   name="enviar" value="Enviar">
                        </div> 
                        <?php 
                            
                             if(isset($_GET['cp'])){
                                  $nomeUsuario = $_GET["nomeUsuario"];
                                  $email       = $_GET['email'];
                                  $senha       = $_GET["senha"];
                                  require_once'FrEditarFunc.php';
                             }
                            
                            ?>
                       
                   </section>
                  
                  <section class="janela2">
                     
                      <?php
                      // sessao 90 unidade 5
                      
                       while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
                          
                        ?>   
                       <ul>
                        <li>
                            <a href="FrcadastroFunc.php?cp=pg">
                               Nome Funcionario :<?php echo $nomeUsuario = $row_msg_cont['nomeUsuario']?>
                            </a>
                            
                        </li>
                        <li>Email :<?php echo $email = $row_msg_cont['email'];?></li>
                      </ul>
                      <?php } ?>
                   
                      
                      
                      
                  </section>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>