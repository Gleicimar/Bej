<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
$autoload = function($class){
	include('classes/'.$class.'.php');
};
spl_autoload_register($autoload);
define('INCLUDE_PATH','http://localhost/Muulher-bonita/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

//Conecta com BD
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','mulher_bonita');
define('BASE_DIR_PAINEL',__DIR__.'/painel');
//constate
define('NOME_EMPRESA', 'Mulher  Bonita');

?>