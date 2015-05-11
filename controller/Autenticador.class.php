<?php

final class Autenticador {

    public static function autenticaLogin($conexao,$nomeUser,$senhaUser){
        $objUsuarioDAO = new UsuarioDAO();
        if($objUsuarioDAO->autenticar($conexao, $nomeUser, $senhaUser)){
//            echo "<script type='text/javascript'>window.location='sistema.php</script>";
            header('location:index.php');  
        }
    }

    public static function logout($array){
        foreach ($array as $item){
            setcookie($item, null,time()- 1,"/");          
        }
    }
}

?>
