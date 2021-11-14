<div class="cadastrar  usuario">

        <form method="post"  enctype="multipart/form-data">
        <?php

        if(isset($_POST['acao'])){
        }
?>
        <h2> <i class="fas fa-edit"></i>  Editar Site</h2>
        <label for="nome">Novo logo</label>
                <input type="file" name="imagem-logo" required>
                <label for="nome">Nome:</label>
                <input type="text"name="nome"  placeholder="Nome">
                <label for="nome">Selecione foto da area sobre :</label>
                <input type="file" name="imagem-sobre" required>
                <label for="nome">Descricao:</label>
                <textarea name="descricao-sobre" placeholder="Descricão" ></textarea>
                    <label for="nome">Novo banner:</label>
                <input type="file" name="imagem-banner" required>

                <input type="submit" name="acao" value="Cadastrar">
        </form>
<!---</div><!--cadastrar-->