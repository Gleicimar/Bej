
<?php
if(isset($_GET['loggout'])){
    session_unset( );
    session_destroy();
Painel::redirect(INCLUDE_PATH_PAINEL);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL?>css/login.css">
    <title>Painel | Mulher Bonita</title>
</head>
<body>
<section class="login">
        <div class="painel-login">
<?php

        if(isset($_POST['login'])){
            if(isset($_COOKIE['lembrar'])){
                $_POST['lembrar'] = $_COOKIE['lembrar'];
                $user = $_COOKIE['user'];
                $password = $_COOKIE['senha'];
            }
            if(isset($_POST['conectar'])){
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                $verifica= MySql::conectar( )->prepare("SELECT * FROM  `tb_admin` WHERE login=?  AND senha= ? ");
                $verifica->execute(array($login,$senha));
                if($verifica->rowCount()==1){
                    $dados=$verifica->fetch();
                    $_SESSION['nome']=$dados['nome'];
                    $_SESSION['user']=$dados['login'];
                    $_SESSION['senha']=$dados['senha'];
                    if(isset($_POST['lembrar']) && $_POST['lembrar']=='on'){
                        setcookie('lembrar',true,time()+(60*60*24),'/');
                        setcookie('user',$login,time()+(60*60*24),'/');
                        setcookie('senha',$senha,time()+(60*60*24),'/');
                    }
?>
                <h2> Efetue o login para acessar o painel</h2>
                <form method="post">
                        <div class="input-icon  icon1">
                        <i class="fas fa-user  icon"></i> <input type="text" placehoder="login" name="login">
                        </div><!--icon-->
                        <div class="input-icon icon2">
                        <i class="fas fa-lock"></i> <input type="password" placehoder="senha" name="senha">
                        </div><!--icon-->
                        <input type="hidden" name="conectar">
                        <div class="lembrar">
                        <input type="submit"name="acao" value="Logar">
                                <div class="lembrar2">
                                <label>lembrar</label><input type="checkbox" name="lembrar" >
                                </div><!--lembrar2-->
                        </div><!--lembrar-->

                </form>
        </div><!-- painel-login -->
</section><!-- login -->
</body>
</html>