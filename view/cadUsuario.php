<?php

include_once 'controller/ListaArquivos.php';

$objListar = new ListaArquivos();

$conexao = Conecta::getConexao("config/bd_mysql.ini");

$objUsuarioDAO = new UsuarioDAO();

$acaoPost = isset($_POST['acao']) ? $_POST['acao'] : 0;

$acao = isset($_GET['acao']) ? $_GET['acao'] : 0;

$id = "";

if (isset($_SESSION['S_idCliente'])) {
    $id = $_SESSION['S_idCliente'];
}

$nome = isset($_POST['txtNome']) ? $_POST['txtNome'] : "";
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
$senha = isset($_POST['txtSenha']) ? $_POST['txtSenha'] : "";
//$foto = isset($_POST['rbSexo']) ? $_POST['rbSexo'] : "";

$senha = base64_encode($senha);


$stmt = array(
    0 => "INSERT Usuario VALUES(:id,:nome,:email,:senha,:foto)",
    1 => "",
    2 => "UPDATE Usuario SET nome=:nome,email=:email,senha=:senha,foto=:foto WHERE id=:id",
    3 => ""
);

$objUsuario = new Usuario("", "", "", "", "", $stmt);

if ($acaoPost == 1) {
    $objUsuario = new Usuario(NULL, $nome, $email, $senha, 'img/semfoto.jpg', $stmt);
    $objUsuario->inserir($objUsuario, $conexao);
}

if ($acaoPost == 2) {
    $objUsuario = new $objUsuario($id, $nome, $email, $senha, 'img/semfoto.jpg', $stmt);
    $_SESSION['S_LoginNome'] = $nome;
    $objUsuario->alterar($objUsuario, $conexao);
}

if ($acao == 2) {
    $objUsuario = $objUsuarioDAO->selectUsuarioID($conexao, $id, $objUsuario);
}
?>
<section class="formularioBorda">
    <section class="containerTopo">
        <h1>Cadastro gratuito</h1>
        <p>Por favor, complete os seus dados</p> 
    </section>
    <form class="formulario" method="post" action="">
        <input type="hidden" id="hidAcao"  name="acao" value="<?php echo $acao; ?>">
        <input type="hidden" name="idCliente" value="<?php echo $id; ?>">
        <h4 class="formularioH">Dados Usuario</h4>
        <input type="text" class="campo-largo" placeholder="Nome" name="txtNome" id="txtNome" required value="<?php echo $objUsuario->getNome(); ?>"><br>
        <input type="email" class="campo-largo" placeholder="E-mail" name="txtEmail" id="txtEmail" required value = "<?php echo $objUsuario->getEmail(); ?>">
        <input type="password"  class="campo-normal" placeholder="Senha" name="txtSenha" id="txtSenha" required>
        <input type="password"  onInput="checaSenha(this)" class="campo-normal" placeholder="Repetir Senha" name="rlog_senha" id="rlog_senha" required>
        <br/>
        <br/>
        <button class="botao" type="submit">Cadastrar</button>
    </form>
    <div id="upload">
            <form id="frmUp" action="controller/upload.php" method="post" enctype="multipart/form-data" target="iframeUpload" onsubmit="startUpload();">
                <div>
                    <p id="uploadMsg">Carregando...<br/><img src="img/Upload/loader.gif" alt=""></p>
                    <div class="uploadFrm">
                        <div class="seguraUpload">
                            <input type="file" name="arquivo" id='arquivo'>
                            <input class="btn" type="submit" value="ENVIAR">
                        </div>
                    </div>
                    <article class='seguraUpload'>
                        <?php
                            $caminho = $objUsuario->getFoto();
                            $pos = strripos($caminho, "/");
                            $nome = substr($caminho, $pos);
                            $nome = str_replace("/", "", $nome);
                            echo $objListar->montaGrid("imagemjogo", $caminho, $nome);
                        ?>
                    </article>
                    <div id="mensagem"></div>
                </div>
                <iframe name="iframeUpload" style="visibility:hidden; width:0px;height:0px;"></iframe>
            </form>
        </div>
</section>

