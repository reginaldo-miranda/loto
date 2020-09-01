<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <title>Sisvendas</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link href="../static/css/stilo.css" rel="stylesheet" type="text/css">
            <script src="../static/js/forminput.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
        </head>
        <?php
          require_once("../php/BEconexao_pdo.php");
          session_start();
        //  $_SESSION["usuario"] = "regi";
           
          if (isset($_POST["usuario"]) ){
              $usuario = $_POST["usuario"];
              $senha   = $_POST["senha"];
              echo $usuario . "<br>";
              echo $senha . "<br>";
                if ($usuario == 'ADMIN' and $senha == 'ADMIN'){
                    $_SESSION["autenticar"] = 'administrador';
                    header("location:FrAdministrativo.php");
                    exit;
                }
                    
                  $pdo = getconexao();

                  echo ("usuario teste   ") . $usuario . "<br>";
                  $sql = "SELECT * FROM usuario WHERE nomeUsuario = '$usuario' ";
                  $result = $pdo->prepare($sql);
                  $result->execute();
                  if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                      $nomeUsuariobc = $row['nomeUsuario'];
                      $senhabc       = $row['senha'];
                      $emailbc       = $row['email'];
                      $informacao    = $row['idusuario'];
                      echo ("nome que achou ") . $nomeUsuariobc . "<br>";
                      $_SESSION["autenticar"] =  $informacao;
                    
                      
                      header("location:FrAdministrativo.php");
                      exit;
                  }else{
                      echo "nao achei";
                      header("location:\projetovendas\index.php");
                      exit;
                  }
                     
            }
                        
         // sessao 93 unid 07
        ?>
        <header>
            <div id="TEXTO">Sistema de Comercio - Logim</div>
            <div id="saida">
               <!-- <button id="btn-fecharSistema" type="button" onClick="fechar()">Sair <i class="fas fa-times"></i></button> -->
                <a href="../sair.php">sair<b></b></a> 
            </div>
        </header>
        <body>
            <div class="conteiner">
                <form name="BEvalidalogim1.php" action="FrLogim.php" method="post">
                    <div id="container">
                        <div class="row">
                            <div class="column-3 column label">
                                <label for="txtLogon">Email</label>
                            </div>
                            <div class="column-9 column input">
                                <input type="txt" id="txtLogon" name="usuario" placeholder="Digite seu usuario" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="column-3 column label">
                                <label for="txtPassword">Senha</label>
                            </div>
                            <div class="column-9 column input">
                                <input type="password" id="txtPassword" name="senha" placeholder="Digite a Senha" required />
                                <input type="submit" name="enviar" value="Enviar">
                            </div>
                        </div>
                    </div>
                        
                </form>
            </div>
            <!--fim conteiner-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>