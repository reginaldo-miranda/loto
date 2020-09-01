<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Conversao</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="../static/css/stilo.css" rel="stylesheet" type="text/css">
      <script src="../static/js/forminput.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
    </head>
  <?php
      include("BEconexao_pdo.php");
    
      if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $_SESSION['ssenha'] = $senha;

        $senhabc = '';
        $verifica = '';
        $datafinal = '';
        $datazero  = strtotime("000-00-00");
        $datazero1  = strtotime("000-00-00");
        
       
        echo('senha linha 35 :'.$senha)."<br>";

        function verdata($email, $senha, $senhabc, $datafinal) {
          echo ('dentro da function ')."<br>";
     
          $emailbc = '';
          $datazero  = strtotime("000-00-00");
          $datazero1  = strtotime("000-00-00");
       
         
          $pdo = getconexao();
          $sql = "SELECT senha,data_venc,email FROM dados_logim where email = '$email'"; // and senha = '$senha'";
          $result = $pdo->prepare($sql);
          $result->execute();
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              $emailbc  =  $row['email'];
              $senhabc   = $row['senha'];
              $datafinal = $row['data_venc'];
          } // fim DO WHILE  
          echo ("datafinal = data_venc bco" . $datafinal);
       

          $dt_atual               = date("Y-m-d"); // data atual
          $timestamp_dt_atual     = strtotime($dt_atual); // converte para timestamp Unix
          $dt_expira              =  $datafinal; //"2012-10-05"; // data de expiração do anúncio
          $timestamp_dt_expira    = strtotime($dt_expira); // converte para timestamp Unix

          if ($email == "reginaldobrain@gmail.com" and $senha == "123") {
            // header("location:/templates/FRadministrativo.php", true, 301); exit; 
            echo "<script type='text/javascript'>window.top.location='https://conversao.000webhostapp.com/templates/FRadministrativo.php';</script>";
            exit;
          } else {
            echo('antes de checar data final'.$datafinal);
            echo('datazero1 :'.$datazero1);
            if ($emailbc == $email and  $senhabc == $senha) {
              if ($datafinal == $datazero1) {
                ?>
                  <html>
                    <div id="aliberar">
                        <p>Sua senha será liberada após o pagamento, verifique seu Email obrigado !<p>
                          <input type="button" id="BtnSairAliberar" onclick="simnao('n')" value="Ok">
                  </html>
                <?php
                      }else{
                        // echo 'data venc nao e == 0 '.$datafinal;
                        if ($timestamp_dt_atual > $timestamp_dt_expira) { //true
                          //header("location:Frmsg.php");
                          // echo  "Sua senha expirou! Deseja renovar ?"."<br>";
                          $_SESSION['semail'] = $email;
                          $_SESSION['ssenha'] = $senha;
                          $verifica = 'sim';
                          $_SESSION['ExisteCadastro'] = $verifica;
                 ?>
                 <hml>
                    <div id="btncontainer">
                      <h5>Sua senha expirou! Deseja renovar ?</h5>
                      <div>----------------------------------</div>
                      <div id="btnsn">
                        <input type="button" onclick="simnao('s')" value="Sim">
                        <input type="button" onclick="simnao('n')" value="Não">
                      </div> <!-- btnsn -->
                    </div>
                    <?php
                        } else {
                          // echo 'vai para conversao ';
                          //  header("location:/templates/FRconversao.php");
                          echo "<script type='text/javascript'>window.top.location='https://conversao.000webhostapp.com/templates/FRconversao.php';</script>";
                          exit;
                        }
                      }
                    }else {
                      $_SESSION['semail'] = $email;
                      $_SESSION['ssenha'] = $senha;
                      $verifica = 'nao';
                      $_SESSION['ExisteCadastro'] = $verifica; 
                    ?>
                        <html>
                            <div id="btncontainerc">
                                <h5>Clique em comprar para escolher o plano</h5>
                                <div id="btnsn">
                                  <input type="button" onclick="simnao('s')" value="Comprar ?">
                                  <input type="button" onclick="simnao('n')" value="Não">
                                </div> <!-- btnsn -->
                            </div>
                        </html>
                    <?php
                    }
                  }
                } // funcao verdata
                verdata($email, $senha, $senhabc, $datafinal);
              } // if isset

  ?>

</html>