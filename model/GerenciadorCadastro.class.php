<?php

class GerenciadorCadastro {

    protected $sqlStmt;

    function __construct($sqlStmt) {
        $this->sqlStmt = $sqlStmt;
    }

    public function inserir($obj, $conn) {
        $ini = strpos($this->sqlStmt[0], ":");
        $sub = substr($this->sqlStmt[0], $ini);  //:idaluno,:nome_aluno,:email_aluno)
        $sub = str_replace(")", "", $sub);       //:idaluno,:nome_aluno,:email_aluno
        $expSub = explode(",", $sub);  //$expSub[0]':idaluno' $expSub[1]':nome_aluno' $expSub[2]':email_aluno'

        $api = new ReflectionClass(get_class($obj));
        $j = 0;
        foreach ($api->getMethods() as $method) {
            if (substr($method->getName(), 0, 3) == "get") {
             
                if ($j == 0) {
                    $valores[] = null;
                } else {
                    $valores[] = $this->{$method->getName()}();
                }
                $j++;
            }
        }

        $i = 0;
        foreach ($expSub as $value) {
            $teste[$value] = $valores[$i];
            $i++;
        }
        try{
            $prepStmt = $conn->prepare($this->sqlStmt[0]);
            $prepStmt->execute($teste);
            echo "<script type=\"text/javascript\" > showSuccessToast('Dados cadastrados com sucesso!!'); </script>";
        } catch (PDOException $ex) {
//            var_dump($ex);
            echo "<script type=\"text/javascript\" > showErrorToast('" . $ex->getMessage() . "'); </script>";
            var_dump($ex);
        }
    }

    public function alterar($obj, $conn) {
        $ini = strpos($this->sqlStmt[0], ":");
        $sub = substr($this->sqlStmt[0], $ini);
        $sub = str_replace(")", "", $sub);
        $expSub = explode(",", $sub);

        $api = new ReflectionClass(get_class($obj));
        foreach ($api->getMethods() as $method) {
            if (substr($method->getName(), 0, 3) == "get") {
                $valores[] = $this->{$method->getName()}();
            }
        }
        $i = 0;
        foreach ($expSub as $value) {
            $teste[$value] = $valores[$i];
            $i++;
        }
        $prepStmt = $conn->prepare($this->sqlStmt[2]);
        $prepStmt->execute($teste);
    }

    public function excluir($id, $conn) {
        $ini = strpos($this->sqlStmt[3], ":");
        $sub = substr($this->sqlStmt[3], $ini);
        $sub = str_replace(")", "", $sub);
        $sub . " - " . $teste[$sub] = $id;
        $prepStmt = $conn->prepare($this->sqlStmt[3]);
        $prepStmt->execute($teste);
    }

    public function consultar($conn) {
        $prepStmt = $conn->query($this->sqlStmt[1]);
        return $prepStmt;
    }

}