<?php
$conexao = Conecta::getConexao("config/bd_mysql.ini");

$acaoPost = isset($_POST['acao']) ? $_POST['acao'] : 0;

$acao = isset($_GET['acao']) ? $_GET['acao'] : 0;

$idC = isset($_GET['idC']) ? $_GET['idC'] : 0;

$id = "";

if (isset($_SESSION['S_idCliente'])) {
    $id = $_SESSION['S_idCliente'];
}

$comentario = isset($_POST['txtCom']) ? $_POST['txtCom'] : "";

$stmt = array(
    0 => "INSERT Comentario VALUES(:id,:comentario,:dataCriacao,:dataEdicao,:id_Usuario)",
    1 => "",
    2 => "",
    3 => "DELETE FROM Comentario WHERE id = :id"
);

$objComentario = new Comentario("", "", "", "", "", $stmt);

if ($acaoPost == 1) {
    $objComentario = new Comentario(NULL, $comentario, date("Y-m-d H:i:s"), NULL, $id, $stmt);
    $objComentario->inserir($objComentario, $conexao);
}
if ($acao == 3) {
    $objComentario->excluir($idC, $conexao);
}
?>

<section class="produto">
    <h1>Conheça nosso novo Produto</h1>
    <img src="img/logoTipo/icon_ecommerce.png" alt="">
    <h4>ecommerce</h4>
    <p>Uma plataforma e-commerce para consumidores exigentes. 
        Uma poderosa ferramenta de vendas orientada a conversão e resultado, 
        totalmente integrada a um completo sistema ERP. Tenha total customização e 
        conte com a maior suíte de funcionalidades do mercado.</p>
</section>
<section class="comentario">
    <form method="post" action="">
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
        <hr>
        <h4>COMENTÁRIOS</h4>
        <?php
        if (isset($_COOKIE['login']) && $_COOKIE['login'] != 0) {
            ?> <textarea placeholder="Escreva um comentário" id="txtCom" name="txtCom" required></textarea>
            <button class="botao" type="submit" onclick="mudaIdHiddenNovoC();">ENVIAR</button><?php
        } else {
            ?><textarea placeholder="Você deve estar logado para postar um comentário." disabled></textarea>
        </form>
        <?php
    }
    ?> 
</section>
<?php

if (isset($_COOKIE['login']) && $_COOKIE['login'] != 0) {
    try {
        $stmtSelect = $conexao->prepare("SELECT * FROM Usuario INNER JOIN Comentario WHERE comentario.id_Usuario = usuario.id ORDER BY dataCriacao DESC;");
        $stmtSelect->execute(array());
        $numLinhas = $stmtSelect->rowCount();
        if ($numLinhas == 0) {
            return "Não existe Comentário!!!";
        } else {
            $display = "";
            while ($colunas = $stmtSelect->fetch(PDO::FETCH_BOTH)) {
                $data = date('d/m/Y H:m:s', strtotime($colunas[7]));
                $display .= " 
                    <section class='comentarioUsuario'> 
                        <input type='hidden' id='hidNomeCom'  name='hidNomeCom' value='$colunas[2]'>
                        <section class='comUsuImg'>
                            <img src='$colunas[4]' alt=''>
                            <p class ='nomeUsuario'>$colunas[1]</p>
                        </section>
                        <section class='secHorasOver'>
                            <p class='comHoras'>$data</p>
                            <input type='hidden' id='hidCod'  name='acaoC' value='$colunas[5]'>
                            <span class ='aOver'>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <a class='aOver openBox' name='box1' href='#'>Editar</a>
                            <span class ='aOver'>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                            <a class ='aOver' href='index.php?view=cadComentario&acao=3&idC=$colunas[5]'>Excluir</a>    
                        </section>
                        <p class = 'comentarioP'>$colunas[6]</p>
                    </section>  
                    <hr class='comentarioHr'>";
            }
        }
        echo $display;
    } catch (PDOException $e) {
        return $e;
    }
} else {
    try {
        $stmtSelect = $conexao->prepare("SELECT * FROM Usuario INNER JOIN Comentario WHERE comentario.id_Usuario = usuario.id ORDER BY dataCriacao DESC;");
        $stmtSelect->execute(array());
        $numLinhas = $stmtSelect->rowCount();
        if ($numLinhas == 0) {
            return "Não existe Comentário!!!";
        } else {
            $display = "";
            while ($colunas = $stmtSelect->fetch(PDO::FETCH_BOTH)) {
                $data = date('d/m/Y H:m:s', strtotime($colunas[7]));
                $display .= " 
                    <section class=\"comentarioUsuario\" id=\"ajaxComentarioUsuario\">   
                    <section class=\"comUsuImg\">
                    <img src=\"$colunas[4]\">
                    <p class = \"nomeUsuario\">$colunas[1]</p>
                    </section>
                    <section class=\"secHorasOver\">
                    <p class = \"comHoras\">$data</p>";
                $display .="</section>
                    <p class = \"comentarioP\">$colunas[6]</p>
                    </section><hr class=\"comentarioHr\">";
            }
        }
        //return $display;
        echo $display;
    } catch (PDOException $e) {
        return $e;
    }
}?>
 <section class='fullScreen' id='displayFullScreen'>
        <section class='dialog' id='box1'>
            <label>Nome</label>
            <input type='text' disabled class='campo-largoP'>
            <label>Data de Postagem</label>
            <input type='text' disabled class='campo-largoP'>
            <label>Comentario</label>
            <textarea class='campo-textArea'></textarea>
            <a class='button'>EDITAR COMENTÁRIO</a>
        </section>
    </section>


    


