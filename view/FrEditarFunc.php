<!DOCTYPE html>
<?php session_start(); ?>

<html lang="pt-br">

    <head>
        <title>Sisvendas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="static/css/stilo.css" rel="stylesheet" type="text/css">
        <script src="static/js/forminput.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/f48343b6a3.js" crossorigin="anonymous"></script>
    </head>
    <header>
        <div id="TEXTO">Sistema de vendas  - Alterar usuarios</div>

        <div id="saida">
            <a href="sair.php">sair<b></b></a> 
        </div>
    </header>
    <body>
        <main>
            <form action="sair.php" >
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
                           <!-- <input type="submit"   name="enviar" value="Enviar"> -->
                            <a href="../sair.php">sair<b></b></a> 
                        </div> 
            </form>
        </main>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>