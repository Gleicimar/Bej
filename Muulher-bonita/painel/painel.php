<?php
	if(isset($_GET['logout'])){
		Painel::logout();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL?>css/painel.css">
    <title>Painel | Mulher Bonita</title>
</head>
<body>
<section class="painel">
                <aside class="menu" id="menu-side">
                <?php if($_SESSION['imagem']==''){?>
                <div class="avatar">
                <i class="fa fa-user"></i>
                </div><!--avatar-->
                <?php }else{ ?>
			<div class="imagem-usuario">
				<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['imagem']; ?>" />
			</div><!--avatar-usuario-->
		<?php } ?>
        <div class="nome">
        <p>Bem vindo  <?php echo $_SESSION['nome']?></p>
        </div><!--nome-->
        <div class="painel-ad">
        <h2><i class="fas fa-tachometer-alt"></i>  Administração do Painel </h2>
        <p>Aqui você pode gerenciar todas as suas informações</p>
        <div class="painel-menu">
    <h2>Cadastrar Produtos</h2>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-produto"> <i class="fas fa-boxes"></i> Cadastrar Produto</a>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-usuario"> <i class="fas fa-user-plus"></i>  Cadastrar Usuario</a>
    <h2>Listar </h2>
            <a href="<?php echo INCLUDE_PATH_PAINEL?>listar-produtos"><i class="fas fa-list"></i> Listar produtos</a>
            <a href="<?php echo INCLUDE_PATH_PAINEL?> produto">Casdastrar produtos</a>
     <h2>Editar</h2>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar"><i class="fas fa-user-edit"></i> Editar Usuario</a>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>editar-site"> <i class="fas fa-edit"></i>  Editar Site</a>
        </div><!--painel-menu-->
        </div><!--painel-ad-->
        </aside><!--menu-->
        <header>
        <i class="fas fa-align-justify" id="ocultMenu"></i>


        <div>
        <a href="<?php echo INCLUDE_PATH_PAINEL;?>"><i class="fas fa-home"></i> Home</a>
        <a href="<?php echo INCLUDE_PATH_PAINEL?>?logout"> <i class="fas fa-sign-out-alt"></i> <span>Sair</span></a>

        </div>
        </header>
        <div class="painel">
                <h2> <i class="fas fa-cogs"></i>  Painel de Controle | <?php echo NOME_EMPRESA?></h2>
        </div>
        <section class="conteudo">
                <div class="box-cadastrar">
                        <?php Painel::carregarPagina();?>
                </div><!--box-content-->
        </section><!--conteudo-->

</section>
<script src="<?php echo INCLUDE_PATH_PAINEL?>js/painel.js"></script>
</body>
</html>
