<?php

class Painel{
            public static function logado(){
return isset($_SESSION['login']) ? true : false;

}
public static function logout(){
    setcookie('lembrar','true',time()-1,'/');
			session_destroy();
			header('Location: '.INCLUDE_PATH_PAINEL);
}
public static function redirect($url){
    echo '<script>location.href="'.$url.'"</script>';
    die();
}
public static function convertMoney($valor){
    return number_format($valor, 2, ',', '.');
}

public static function formatarMoedaBd($valor){
    $valor = str_replace('.', '', $valor);
    $valor = str_replace(',', '.', $valor);
    return $valor;
}
public static function carregarPagina(){
    if(isset($_GET['url'])){
        $url = explode('/',$_GET['url']);
        if(file_exists('pages/'.$url[0].'.php')){
            include('pages/'.$url[0].'.php');
        }else{
            //Página não existe!
            header('Location: '.INCLUDE_PATH_PAINEL);
        }
    }else{
        include('pages/home.php');
    }
}
public static function imagemValida($imagem){
    if($imagem['type'] == 'image/jpeg' ||
        $imagem['type'] == 'imagem/jpg' ||
        $imagem['type'] == 'imagem/png'){

        $tamanho = intval($imagem['size']/1024);
        if($tamanho < 300)
            return true;
        else
            return false;
    }else{
        return false;
    }
}
public static function alert($tipo,$mensagem){
    if($tipo == 'sucesso'){
        echo '<div class="box-alert  sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
    }else if($tipo == 'erro'){
        echo '<div class="box-alert  erro"><i class="fa fa-exclamation"></i> '.$mensagem.'</div>';
    }
}
public static function uploadFile($file){
    $formatoArquivo = explode('.',$file['name']);
    $imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
    if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$imagemNome))
        return $imagemNome;
    else
        return false;
}

public static function deleteFile($file){
    @unlink('uploads/'.$file);
}
public static function insert($arr){

$certo = true;
$nome_tabela = $arr['nome_tabela'];
$query = "INSERT INTO `$nome_tabela` VALUES (null";
foreach ($arr as $key => $value) {
    $nome = $key;
    $valor = $value;
    if($nome == 'acao' || $nome == 'nome_tabela')
        continue;
    if($value == ''){
        $certo = false;
        break;
    }
    $query.=",?";
    $parametros[] = $value;
}

$query.=")";
if($certo == true){
    $sql = MySql::conectar()->prepare($query);
    $sql->execute($parametros);
    $lastId = MySql::conectar()->lastInsertId();
    $sql = MySql::conectar()->prepare("UPDATE `$nome_tabela` SET order_id = ? WHERE id = $lastId");
    $sql->execute(array($lastId));
}
return $certo;
}
public static function update($arr,$single = false){
    $certo = true;
    $first = false;
    $nome_tabela = $arr['nome_tabela'];

    $query = "UPDATE `$nome_tabela` SET ";
    foreach ($arr as $key => $value) {
        $nome = $key;
        $valor = $value;
        if($nome == 'acao' || $nome == 'nome_tabela' || $nome == 'id')
            continue;
        if($value == ''){
            $certo = false;
            break;
        }

        if($first == false){
            $first = true;
            $query.="$nome=?";
        }
        else{
            $query.=",$nome=?";
        }

        $parametros[] = $value;
    }

    if($certo == true){
        if($single == false){
            $parametros[] = $arr['id'];
            $sql = MySql::conectar()->prepare($query.' WHERE id=?');
            $sql->execute($parametros);
        }else{
            $sql = MySql::conectar()->prepare($query);
            $sql->execute($parametros);
        }
    }
    return $certo;
}

}
?>