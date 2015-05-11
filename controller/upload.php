<!--

print_r() da superv�riavel $_FILES()
Array ( 
    [arquivo] => Array ( 
        [name] => "nome do arquivo enviado" 
        [type] =>  "tipo da extensão" 
        [tmp_name] =>  "caminho completo para o arquivo temporório"
        [error] => "c�digo de erro" 
                0 -> sem erro 
                1 -> tamanho maior que no php.ini 
                2 -> tamanho maior que o definido no formulário 
                3 -> upload incompleto 
                4 -> não foi feito o upload
        [size] => "tamanho do arquivo" 
        )
)

-->
<?php
// Script Que copia o arquivo temporario subido ao servidor em um diretorio.
    
    $estado = 0;

    $tipo = $_FILES['arquivo']['type'];
    $caminho = getcwd();
    
    // Definimos Diretorio onde se salva o arquivo
echo     $dir = str_replace("controller","imagemjogo/",$caminho);
    // Tentamos Subir Arquivo
    // 
    // (1) Comprovamos que existe o nome temporario do arquivo
    if (isset($_FILES['arquivo']['tmp_name'])) {
       
        if (file_exists($dir. $_FILES["arquivo"]["name"])){
        
            $estado = 4;
            
        }else{
        
            if ($tipo == 'image/jpeg' || $tipo == 'image/pjpeg' || $tipo == 'image/gif' || $tipo == 'image/png' || $tipo == 'image/x-png') {
                if (!copy($_FILES['arquivo']['tmp_name'], $dir.$_FILES['arquivo']['name'])){
                    $estado = 3;
                }
            }else{
                $estado = 2;
            }
        }
    }else{
        $estado = 1;
    }
?>

<script>parent.resultadoUpload("<?php echo $estado; ?>","<?php echo $_FILES['arquivo']['name'];?>");</script>