<section class="produto">
    <h1>Conheça nosso novo Produto</h1>
    <img src="img/logoTipo/icon_ecommerce.png">
    <h4>ecommerce</h4>
    <p>Uma plataforma e-commerce para consumidores exigentes. 
        Uma poderosa ferramenta de vendas orientada a conversão e resultado, 
        totalmente integrada a um completo sistema ERP. Tenha total customização e 
        conte com a maior suíte de funcionalidades do mercado.</4>
</section>
<section class="comentario">
    <hr>
    <h4>COMENTÁRIOS</h4>
    <?php
    if (isset($_COOKIE['login']) && $_COOKIE['login'] != 0) {
        ?> <textarea placeholder="Escreva um comentário"></textarea>
        <button class="botao" type="submit">ENVIAR</button><?php
    } else {
        ?><textarea placeholder="Você deve estar logado para postar um comentário." disabled></textarea>
        <?php
    }
    ?> 
</section>

<?php include_once "cadComentario.php"; //echo $objComentarioDAO->comentarioToDisplay($conexao); ?>