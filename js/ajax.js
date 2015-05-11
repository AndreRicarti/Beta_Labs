function criaXMLHttp(){
    Ajax = false;
        if(window.XMLHttpRequest) // mozilla
        {
                Ajax = new XMLHttpRequest();
        }
        else if(window.ActiveXObject) // ie
        {
                try
                {
                        Ajax = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e)
                {
                        try
                        {
                                Ajax = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        catch(ee)
                        {
                       }
                }
        }
return Ajax
}

//var _0xb148=["\x50\x72\x6F\x63\x75\x72\x61\x6E\x64\x6F","\x50\x4F\x53\x54","\x6F\x70\x65\x6E","\x43\x6F\x6E\x74\x65\x6E\x74\x2D\x54\x79\x70\x65","\x61\x70\x70\x6C\x69\x63\x61\x74\x69\x6F\x6E\x2F\x78\x2D\x77\x77\x77\x2D\x66\x6F\x72\x6D\x2D\x75\x72\x6C\x65\x6E\x63\x6F\x64\x65\x64","\x73\x65\x74\x52\x65\x71\x75\x65\x73\x74\x48\x65\x61\x64\x65\x72","\x63\x68\x61\x72\x73\x65\x74","\x49\x53\x4F\x2D\x38\x38\x35\x39\x2D\x31","\x43\x61\x63\x68\x65\x2D\x43\x6F\x6E\x74\x72\x6F\x6C","\x6E\x6F\x2D\x73\x74\x6F\x72\x65\x2C\x20\x6E\x6F\x2D\x63\x61\x63\x68\x65\x2C\x20\x6D\x75\x73\x74\x2D\x72\x65\x76\x61\x6C\x69\x64\x61\x74\x65","\x70\x6F\x73\x74\x2D\x63\x68\x65\x63\x6B\x3D\x30\x2C\x20\x70\x72\x65\x2D\x63\x68\x65\x63\x6B\x3D\x30","\x50\x72\x61\x67\x6D\x61","\x6E\x6F\x2D\x63\x61\x63\x68\x65","\x6F\x6E\x72\x65\x61\x64\x79\x73\x74\x61\x74\x65\x63\x68\x61\x6E\x67\x65","\x72\x65\x61\x64\x79\x53\x74\x61\x74\x65","\x73\x74\x61\x74\x75\x73","\x72\x65\x73\x70\x6F\x6E\x73\x65\x58\x4D\x4C","\x69\x74\x65\x6D","\x72\x75\x61","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x62\x61\x69\x72\x72\x6F","\x63\x69\x64\x61\x64\x65","\x75\x66","\x66\x69\x72\x73\x74\x43\x68\x69\x6C\x64","\x76\x61\x6C\x75\x65","\x74\x78\x74\x52\x75\x61","\x64\x61\x74\x61","\x74\x78\x74\x42\x61\x69\x72\x72\x6F","\x74\x78\x74\x43\x69\x64\x61\x64\x65","\x74\x78\x74\x55\x66","","\x43\x65\x70\x20\x6E\xE3\x6F\x20\x65\x6E\x63\x6F\x6E\x74\x72\x61\x64\x6F\x21","\x73\x65\x6E\x64"];function carregaConteudoXMl(_0x1c71x2,_0x1c71x3){showSuccessToast(_0xb148[0]);var _0x1c71x4=criaXMLHttp();_0x1c71x4[_0xb148[2]](_0xb148[1],_0x1c71x2,true);_0x1c71x4[_0xb148[5]](_0xb148[3],_0xb148[4]);_0x1c71x4[_0xb148[5]](_0xb148[6],_0xb148[7]);_0x1c71x4[_0xb148[5]](_0xb148[8],_0xb148[9]);_0x1c71x4[_0xb148[5]](_0xb148[8],_0xb148[10]);_0x1c71x4[_0xb148[5]](_0xb148[11],_0xb148[12]);_0x1c71x4[_0xb148[13]]=function (){if(_0x1c71x4[_0xb148[14]]==4){if(_0x1c71x4[_0xb148[15]]==200){var _0x1c71x5=_0x1c71x4[_0xb148[16]];var _0x1c71x6=_0x1c71x5[_0xb148[19]](_0xb148[18])[_0xb148[17]](0);var _0x1c71x7=_0x1c71x5[_0xb148[19]](_0xb148[20])[_0xb148[17]](0);var _0x1c71x8=_0x1c71x5[_0xb148[19]](_0xb148[21])[_0xb148[17]](0);var _0x1c71x9=_0x1c71x5[_0xb148[19]](_0xb148[22])[_0xb148[17]](0);if(_0x1c71x6!=null&&_0x1c71x6[_0xb148[23]]!=null){gId(_0xb148[25])[_0xb148[24]]=_0x1c71x6[_0xb148[23]][_0xb148[26]];gId(_0xb148[27])[_0xb148[24]]=_0x1c71x7[_0xb148[23]][_0xb148[26]];gId(_0xb148[28])[_0xb148[24]]=_0x1c71x8[_0xb148[23]][_0xb148[26]];gId(_0xb148[29])[_0xb148[24]]=_0x1c71x9[_0xb148[23]][_0xb148[26]];} else {gId(_0xb148[25])[_0xb148[24]]=_0xb148[30];gId(_0xb148[27])[_0xb148[24]]=_0xb148[30];gId(_0xb148[28])[_0xb148[24]]=_0xb148[30];gId(_0xb148[29])[_0xb148[24]]=_0xb148[30];showErrorToast(_0xb148[31]);} ;} ;} ;} ;_0x1c71x4[_0xb148[32]](_0x1c71x3);} ;

function carregaConteudoXMl(caminho,dados){
    //caminho -> url da p�gina que ser� carregada
    //dados -> dados que ser�o enviados � p�gina via metodo post (recupera na p�gina com $_POST['']
    //formato dos dados a serem enviados -> nome=valor&end=valor
    //recuperando na outra p�gina -> $_POST['nome'] $_POST['end']
        showSuccessToast('Procurando');
        var ajax = criaXMLHttp();
        ajax.open("POST",caminho, true);
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajax.setRequestHeader("charset", "ISO-8859-1");
        ajax.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");
        ajax.setRequestHeader("Cache-Control", "post-check=0, pre-check=0");
        ajax.setRequestHeader("Pragma", "no-cache");
        ajax.onreadystatechange = function (){
            if(ajax.readyState==4){
                    if(ajax.status==200){
                        var xmlresposta = ajax.responseXML;
                        var rua = xmlresposta.getElementsByTagName('rua').item(0);
                        var bairro = xmlresposta.getElementsByTagName('bairro').item(0);
                        var cidade = xmlresposta.getElementsByTagName('cidade').item(0);
                        var uf = xmlresposta.getElementsByTagName('uf').item(0);
                            if( rua != null && rua.firstChild != null){
                                gId('txtRua').value = rua.firstChild.data;
                                gId('txtBairro').value = bairro.firstChild.data;
                                gId('txtCidade').value = cidade.firstChild.data;
                                gId('txtUf').value = uf.firstChild.data;
                             //   showSuccessToast('localizado!!!!');
                                
                            }else{
                                gId('txtRua').value = "";
                                gId('txtBairro').value = "";
                                gId('txtCidade').value = "";
                                gId('txtUf').value = "";
                                showErrorToast('Cep n�o encontrado!');
                            }

                    }
            }
        }
        ajax.send(dados);
}

function executaConteudo(caminho,dados,idAlvo){ 
    //caminho -> url da p�gina que ser� executada
    //dados -> dados que ser�o enviados � p�gina via metodo post (recupera na p�gina com $_POST['']
    //formato dos dados a serem enviados -> nome=valor&end=valor
    //recuperando na outra p�gina -> $_POST['nome'] $_POST['end']
    //idAlvo -> id do objeto que ser� atualizado
        var alvo = document.getElementById(idAlvo)
        alvo.innerHTML="";
       
        var ajax = criaXMLHttp()
        ajax.open("POST",caminho, true);
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
        ajax.setRequestHeader("charset", "ISO-8859-1")
        ajax.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate")
        ajax.setRequestHeader("Cache-Control", "post-check=0, pre-check=0")
        ajax.setRequestHeader("Pragma", "no-cache")
        ajax.onreadystatechange = function (){
            if(ajax.readyState==4){
                    if(ajax.status==200){
                        alvo.innerHTML = ajax.responseText;
                       
                    }
            }
        }
        ajax.send(dados)
}


function gId(ID) {
    return document.getElementById(ID);
}

//-----------------------  UPLOAD -------------------------------------------//

function startUpload(){
      document.getElementById('uploadMsg').style.visibility = 'visible'
      document.getElementById('uploadFrm').style.visibility = 'hidden'
      return true
}

function stopUpload(){
      document.getElementById('uploadMsg').style.visibility = 'hidden'
      document.getElementById('uploadFrm').style.visibility = 'visible'
}

function resultadoUpload(estado,file){
    if (estado == 0){
        var img = document.getElementById('imagem');
            img.setAttribute("src", 'imagemjogo/' + file);
            document.getElementById('hidd').value = file;
            var divImg = document.getElementById('divImg').innerHTML = file;
    }else{
        if (estado == 1){
            mensagem = 'Erro ! - O arquivo nao chegou ao servidor'
        }
        if (estado == 2){
            mensagem = 'Erro ! - So � permitido arquivo do tipo imagem (jpeg/gif/png)'
        }
        if (estado == 3){
            mensagem = 'Erro ! - Arquivo n�o foi copiado.'
        }
        if (estado == 4){
            mensagem = 'Erro ! - O arquivo j� Existe!'
        }   
            //mostra mensagem  de erro!
        showErrorToast(mensagem)
    }

    //apaga mensagem ap�s 2 segundos
    setTimeout("msg('mensagem','')",2000)
    //esconde o gif de carregamento
    stopUpload()
}

function scrollBaixo(obj){
    d = document.getElementById(obj);
    window.scroll(0, d.scrollHeight+10);
}