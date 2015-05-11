<?php
class UsuarioDAO {
    
    private static $AUT_LOGIN = "SELECT id, nome, email, senha, count(id) as total FROM Usuario WHERE email = :email and senha = :senha";

    public function autenticar(PDO $conexao, $nomeUser, $senhaUser) {
        try {
            $stmtAut = $conexao->prepare(UsuarioDAO::$AUT_LOGIN);
            $stmtAut->execute(array(':email' => $nomeUser, ':senha' =>base64_encode($senhaUser)));
            $result = $stmtAut->fetch(PDO::FETCH_OBJ);
            if ($result->total == 1) {
                setcookie('login', '1', (time() + (1 * 3600)));
                $_SESSION['S_LoginNome'] = $result->nome;
                $_SESSION['S_idCliente'] = $result->id;
                return TRUE;            
            } else {
                setcookie('login', '0', 0, "/");
                echo "<script type=\"text/javascript\" > showErrorToast('Nome de usuário ou senha inválido!'); </script>";
            }
        } catch (PDOException $e) {
            // return $e;
            echo "<script type=\"text/javascript\" > showErrorToast('" . $e->getMessage() . "'); </script>";
        }
    }
    
    public function selectUsuarioID(PDO $conexao, $id, Usuario $objUsuario) {
        try {            
                $stmtSelId = $conexao->prepare('SELECT * FROM Usuario WHERE id = :id');
                $stmtSelId->execute(array(':id' => $id));
                $result = $stmtSelId->fetch(PDO::FETCH_OBJ);
                $objUsuario->setId($result->id);
                $objUsuario->setNome($result->nome);
                $objUsuario->setEmail($result->email);
                $objUsuario->setSenha($result->senha);
                $objUsuario->setFoto($result->foto);
        } catch (PDOException $e) {
            return $e;
        }
        return $objUsuario;
    }
}
