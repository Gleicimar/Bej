
<div class="cadastrar">
<?php
if(isset($_POST['acao'])){

$nome=$_POST['nome-prod'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];

$imagens=[];
$amountFiles = count($_FILES['imagem']['name']);

			$sucesso = true;
                                if($nome == ''){
                                Painel::alert('erro','O campo nome não pode ficar vazio!');
                                $sucesso = false;
                                }
                                if($descricao == ''){
                                Painel::alert('erro','O campo descrição não pode ficar vazio!');
                                $sucesso = false;
                                }
                                if($quantidade == ''){
                                Painel::alert('erro','O campo quantidade não pode ficar vazio!');
                                $sucesso = false;
                                }
                                if($preco == ''){
                                Painel::alert('erro','O campo preço não pode ficar vazio!');
                                $sucesso = false;
                                }
                                if($amountFiles == 0){
                                Painel::alert('erro','Você precisa enviar pelo menos uma imagem!');
                                $sucesso = false;
                                }

			if($_FILES['imagem']['name'][0] != ''){

			for($i =0; $i < $amountFiles; $i++){
				$imagemAtual = ['type'=>$_FILES['imagem']['type'][$i],
				'size'=>$_FILES['imagem']['size'][$i]];
				if(Painel::imagemValida($imagemAtual) == false){
					$sucesso = false;
					Painel::alert('erro','Uma das imagens selecionadas são inválidas!');
					break;
				}
			}

			}else{
				$sucesso = false;
				Painel::alert('erro','Você precisa selecionar pelo menos uma imagem!');
			}
        if($sucesso){
                //TODO: Cadastrar informacoes e imagens e realizar upload.
                for($i =0; $i < $amountFiles; $i++){
                        $imagemAtual = ['tmp_name'=>$_FILES['imagem']['tmp_name'][$i],
                                'name'=>$_FILES['imagem']['name'][$i]];
                        $imagens[] = Painel::uploadFile($imagemAtual);
                }
                $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.produtos` VALUES (null,?,?,?,?)");
                $sql->execute(array($nome,$descricao,$quantidade,$preco));
          $lastId = MySql::conectar()->lastInsertId();
                foreach ($imagens as $key => $value) {
                        MySql::conectar()->exec("INSERT INTO `tb_admin.produtos_imagens` VALUES (null,$lastId,'$value')");
                }
                Painel::alert('sucesso','O produto foi cadastrado com sucesso!');
        }
        Painel::redirect(INCLUDE_PATH_PAINEL.'cadastrar-produtos');



}
?>
        <form method="post"  enctype="multipart/form-data">
        <h2> <i class="fas fa-store"></i>  Cadastrar Produtos</h2>
                <label for="nome-prod">Produto:</label>
                <input type="text"name="nome-prod"  placeholder="produto">
                <label for="Descricao">Descricão:</label>
                <textarea name="descricao" placeholder="descriçao do produto"></textarea>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" placeholder="0" min="1" max="999">
                <label for="select images">Selecione as imagens:</label>
                  <input multiple type="file" name="imagem[]" >
                <label for="preco">Preço:</label>
                <input type="text" name="preco" placeholder="preço" >
                <input type="hidden" name="cadastrar">
                <input type="submit" name="acao" value="Cadastrar">
        </form>
</div><!--cadastrar-->






