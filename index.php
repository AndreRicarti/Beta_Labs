<?php
session_start();
require_once 'controller/conecta.class.php';
require_once 'model/GerenciadorCadastro.class.php';
require_once 'model/Usuario.class.php';
require_once 'model/UsuarioDAO.class.php';
require_once 'model/Comentario.class.php';
$conexao = Conecta::getConexao("config/bd_mysql.ini");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">   
        <link rel="stylesheet" type="text/css" href="css/jquery.toastmessage.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.toastmessage.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript">
            function mudaIdHiddenNovoC() {
                document.getElementById('acao').value = '1';
            }
            $(document).ready(function ( ) {
                $(".openBox").click(function () {
                    var windowName = $(this).attr("name"),
                            height = ($(window).height() - $('.dialog').outerHeight()) / 2;
                    $(".fullScreen").fadeIn("fast");
                    $("#" + windowName).css("margin-top", height + "px").fadeIn("fast");
                });
                $(".button").click(function () {
                    $(".fullScreen, .dialog").fadeOut("fast");
                });
            });
        </script>
    </head>
    <body>
        <header class="cabecalho">
            <div class="cab-logoTipo">
                <a href="index.php"><img class="logoTipo" src="img/logoTipo/logoTipo.png" alt=""></a>
                <nav class="menu">
                    <ul id="nav">                      
                        <?php
                        if (isset($_SESSION['S_LoginNome'])) {
                            if ($_SESSION['S_LoginNome'] !== '') {
                                ?><li><a href="logout.php">Olá, <?php echo $_SESSION['S_LoginNome']; ?>? Não é você? Sair.</a></li>
                                <li><a href="index.php?view=cadUsuario&acao=2">Editar Cadastro</a></li>
                                <?php
                            }
                        } else {
                            ?><li><a href="login.php">Login</a></li>
                                <li><a href="index.php?view=cadUsuario&acao=1">Cadastrar</a></li><?php
                            }
                            ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="container">           
            <?php
            $url = "";
            if (isset($_GET['view'])) {
                $diretorio = $_GET['view'];
                $url = "view/$diretorio";
            }
            if ($url == "") {
                try {
                    $_GET["acao"] = 1;
                    include_once "view/cadComentario.php";
                } catch (ErrorException $e) {
                    var_dump($e);
                }
            }
            if ($url != "") {
                try {
                    include_once $url . ".php";
                } catch (ErrorException $e) {
                    echo "<script type=\"text/javascript\" > showErrorToast('" . $e->getMessage() . "');</script>";
                }
            }
            ?>
        </section>
        <br>
        <footer id="rodape">
            <div id="p_rodape">
                <p>Copyright © 2015 ArrayEnterprises  |  Rua Bandeira Paulista, 702, 12º andar - Itaim Bibi | 011 3522-6826</p>
            </div>
        </footer>
        <br>
    </body>
</html>
