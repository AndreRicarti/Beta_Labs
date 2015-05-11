<?php

class ListaArquivos {

    private $arquivos;
    private $pastas;

    public function getArquivos() {
        return $this->arquivos;
    }

    public function getPastas() {
        return $this->pastas;
    }

    public function setArquivos($arquivos) {
        $this->arquivos = $arquivos;
    }

    public function setPastas($pastas) {
        $this->pastas = $pastas;
    }

    public function __construct() {
        $arquivos = array();
        $pastas = array();
    }

    public function listar($pasta) {
        // pega o endereço do diretório
        $diretorio = getcwd();
        // abre o diretório
        $ponteiro = opendir($diretorio . "/$pasta");
        // monta os vetores com os itens encontrados na pasta
        while ($nome_itens = readdir($ponteiro)) {
            $itens[] = $nome_itens;
        }
        //ordena os itens
        sort($itens);
        // percorre o vetor para fazer a separacao entre arquivos e pastas 
        foreach ($itens as $listar) {
            // retira "./" e "../" para que retorne apenas pastas e arquivos
            if ($listar != "." && $listar != ".." && $listar != "Thumbs.db") {
                // checa se o tipo de arquivo encontrado é uma pasta
                if (is_dir($listar)) {
                    // caso VERDADEIRO adiciona o item à  variável de pastas
                    $this->pastas[] = $listar;
                    //$diretorio[] =$listar; 
                } else {
                    // caso FALSO adiciona o item à  variável de arquivos
                    $this->arquivos[] = $listar;
                    //$arquivo[]=$listar;
                }
            }
        }
    }

    public function montaGrid($pasta, $caminho,$nome){
        $this->listar($pasta);
        $grid = "";
                $grid .= "<div class='tumb'>
                          <div id = 'divImg' class='titulo'>$nome</div>"
                        . "<div class='imagem'><img id='imagem' src='$caminho'></div>
                          </div>";          
        return $grid;   
    }
}
