<?php
session_start();
require_once 'model/GerenciadorCadastro.class.php';
require_once 'controller/conecta.class.php';
require_once 'model/UsuarioDAO.class.php';
require_once 'controller/Autenticador.class.php';
$conexao = Conecta::getConexao("config/bd_mysql.ini");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Array Enterprises</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">   
        <link rel="stylesheet" type="text/css" href="css/jquery.toastmessage.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.toastmessage.js"></script>
    </head>
    <body>
        <?php
        if (isset($_POST['txtEmail']) && isset($_POST['txtSenha'])) {
            $nomeUser = $_POST['txtEmail'];
            $senhaUser = $_POST['txtSenha'];
            Autenticador::autenticaLogin($conexao, $nomeUser, $senhaUser);
        }
        if (isset($_GET['sair'])) {
            Autenticador::logout(array(0 => 'login'));
        }
        ?>
        <section class="container">
             <figure class="logoTipo">
                 <a href="index.php"><img src ="img/logoTipo/logoTipo_Azul.png" alt=""></a>
            </figure>
            <form class="form-signin" role="form" method="post" action="">
                <label for="txtEmail">Email</label><br>            
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Email"><br/><br/>
                <label for="txtSenha">Senha</label><br>
                <input type="password" id="txtSenha" name="txtSenha" placeholder="Senha">
                <br><br/>
                <button class="botao" type="submit">ENTRAR</button>
            </form>
        </section>
    </body>
</html>

