
<div class="cadastrar  usuario">

        <form method="post"  enctype="multipart/form-data">
        <?php

        if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $login= $_POST['usuario'];
        $senha = $_POST['senha'];
        $imagem= $_FILES['imagem'];
                if($nome == ''){
                        Painel::alert('erro','O login está vázio!');
                }else if($nome == ''){
                        Painel::alert('erro','O nome está vázio!');
                }else if($login == ''){
                        Painel::alert('erro','O usuário está vázio!');
                }else if($senha == ''){
                        Painel::alert('erro','A senha está vázia!');
                }else if($imagem['name'] == ''){
                        Painel::alert('erro','A imagem está vázia!');
                }else{
                        //Apenas cadastrar no banco de dados!
                        $usuario = new Usuario();
                        $imagem = Painel::uploadFile($imagem);
                        $usuario->cadastrarUsuario($nome,$login,$senha,$imagem);
                        Painel::alert('sucesso','O cadastro do usuário '.$login.' foi feito com sucesso!');
                }
                Painel::redirect(INCLUDE_PATH_PAINEL.'cadastrar-usuario');

}

?>
        <h2> <i class="fa fa-user-plus"></i>   Cadastrar Usuario</h2>
                <label for="nome">Nome:</label>
                <input type="text"name="nome"  placeholder="Nome">
                <label for="nome">Usuario:</label>
                <input type="text"name="usuario"  placeholder="Usuario">
                  <label for="nome">Senha:</label>
                <input type="password" name="senha" placeholder="Senha" >
                <label for="nome">Foto :</label>
                <input type="file" name="imagem" required>

                <input type="submit" name="acao" value="Cadastrar">
        </form>
<!---</div><!--cadastrar-->