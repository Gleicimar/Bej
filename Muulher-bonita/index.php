<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css"/>
    <title>Mulher Bonita - Make e acessorios</title>
</head>

<body>
<header >
    <div class="container">
<a href="<?php echo INCLUDE_PATH;?>home" class="logo"></a>
        <nav id="nav">
<button  aria-label="Abrir menu"    id="btn" aria-expanded="false" aria-haspopup="true" aria-controls
="menu">  <span id="hamburger"></span> </button>
            <ul id="menu" role="menu">
                <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>produtos">Produtos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>sobre">Quem Somos</a></li>
                <li><a href="<?php echo INCLUDE_PATH;?>contatos">Contatos</a></li>
            </ul>
        </nav>
    </div><!--container-->
</header >
<?php
$url=isset($_GET['url']) ? $_GET['url'] : 'home';
if(file_exists('pages/'.$url.'.php')){
    include('pages/'.$url.'.php');
}else{
    include('pages/erro404.php');
}
?>
<footer>
    <div class="container">
        <p>Todos os direitos  reservados 2021</p>
    </div>
</footer>
<script src="<?php echo INCLUDE_PATH;?>js/functions.js"></script>
</body>
</html>