
<section class="destaque">
    <div class="container">
<h2>Seja  seu proprio tipo
    de  <span>beleza e  ame </span>  isso
</h2>
<a href="">Compar agora</a>
</div><!--destaque-->
</section>
<section class="produto-destaque">
    <h2>Nossos Destaques</h2>
<div class="container">
<?php
$produtos =MySql::conectar()->prepare("SELECT * FROM   `tb_admin.produtos_imagens`  INNER JOIN   `tb_admin.produtos` LIMIT 4");
$produtos->execute();
$produtos = $produtos->fetchAll();
foreach ($produtos as $key => $value) {
?>
    <div class="produto-destaque-wrapper">
    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem']; ?>" />
<?php
$info=MySql::conectar()->prepare("SELECT * FROM `tb_admin.produtos` WHERE id = $value[produto_id]");
 $info->execute();
$info = $info->fetch();

?>    <h2><?php echo $info['nome']?></h2>
    <p>R$ <?php echo $info['preco']?><a href="" >Comprar</a></p>
    </div><!--produto-destaque-wrapper-->
<?php } ?>
    </div><!--container-->
</section><!--produto-destaque-->
<section class="sobre" id="sobre">
<h2>Quem somos</h2>
<div class="container">
<div class="sobre-wrapper">
            <img src="<?php echo INCLUDE_PATH;?>image/Jennie.jpg" alt="">
        <div class="sobre-texto">
        <h2>Jennie </h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos asperiores aliquam veritatis tenetur impedit recusandae unde eveniet velit aperiam! Omnis eum aliquid at asperiores officia porro natus nobis vitae?</p>
            </div><!--sobre-texto-->
    </div><!--sobre-wrapper-->
    <div class="sobre-wrapper ">
        <img src="<?php echo INCLUDE_PATH;?>image/Bethania.jpg" class="p2" alt="">
    <div class="sobre-texto p2">
    <h2>Bethania</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quos asperiores aliquam veritatis tenetur impedit recusandae unde eveniet velit aperiam! Omnis eum aliquid at asperiores officia porro natus nobis vitae?</p>
        </div><!--sobre-texto-->
</div><!--sobre-wrapper-->
</div><!--container-->
</section><!--sobre-->
<section class="redes-sociais" id="contato">
    <h2>Nossas redes</h2>

<div class="container">

<div class="redes-sociais-wrapper">
    <a href="https://www.instagram.com/mulherbonita.makeseacessorios/">       <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"

        viewBox="0 0 80 80"
        style=" fill:#000000;"><path fill="#8585cc" d="M61.7,2.5H18.3C9.6,2.5,2.5,9.6,2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4 c8.7,0,15.8-7.1,15.8-15.8V18.3C77.5,9.6,70.4,2.5,61.7,2.5L61.7,2.5z"></path><path fill="#8d8dd8" d="M2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V18.3c0-0.6,0-1.3-0.1-1.9 C64.8,8.6,49.9,4,34,4C24,4,14.4,5.8,5.5,9.1C3.6,11.7,2.5,14.9,2.5,18.3z"></path><path fill="#bd82f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V26.1C65.3,17.3,50.3,12,34,12 c-11.3,0-21.9,2.5-31.5,7V61.7z"></path><path fill="#ed73f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V36.4C65.9,26.2,50.7,20,34,20 c-11.4,0-22.1,2.9-31.5,8V61.7z"></path><path fill="#f97dcd" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V47.7C66.9,35.6,51.3,28,34,28 c-11.6,0-22.4,3.4-31.5,9.3V61.7z"></path><path fill="#fc9c95" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8v-0.4C68.9,46.2,52.7,36,34,36 c-11.9,0-22.9,4.2-31.5,11.2V61.7z"></path><path fill="#ffac99" d="M2.5,58.2v3.5c0,8.7,7.1,15.8,15.8,15.8h43.4c4.8,0,9-2.1,11.9-5.4C67.9,55.7,52.3,44,34,44 C21.5,44,10.2,49.5,2.5,58.2z"></path><path fill="#ffc49c" d="M18.3,77.5h43.4c1.7,0,3.4-0.3,5-0.8C62.6,62.4,49.5,52,34,52c-12.7,0-23.7,7-29.6,17.3 C7.1,74.2,12.3,77.5,18.3,77.5z"></path><path fill="#ffde8d" d="M18.3,77.5h40.3C55,67.3,45.4,60,34,60c-10.5,0-19.6,6.3-23.7,15.3C12.6,76.7,15.4,77.5,18.3,77.5z"></path><path fill="#fff69f" d="M18.3,77.5h31.6c-3-5.7-9-9.5-15.9-9.5c-6.9,0-12.8,3.8-15.9,9.5C18.2,77.5,18.2,77.5,18.3,77.5z"></path><path fill="#8b75a1" d="M62,3c8.3,0,15,6.7,15,15v44c0,8.3-6.7,15-15,15H18C9.7,77,3,70.3,3,62V18C3,9.7,9.7,3,18,3H62 M62,2 H18C9.2,2,2,9.2,2,18v44c0,8.8,7.2,16,16,16h44c8.8,0,16-7.2,16-16V18C78,9.2,70.8,2,62,2L62,2z"></path><path fill="#fff" d="M55 22A3 3 0 1 0 55 28 3 3 0 1 0 55 22zM40 54c-7.7 0-14-6.3-14-14s6.3-14 14-14 14 6.3 14 14S47.7 54 40 54zM40 30c-5.5 0-10 4.5-10 10 0 5.5 4.5 10 10 10 5.5 0 10-4.5 10-10C50 34.5 45.5 30 40 30z"></path><path fill="#fff" d="M51,68H29c-9.4,0-17-7.6-17-17V29c0-9.4,7.6-17,17-17h22c9.4,0,17,7.6,17,17v22 C68,60.4,60.4,68,51,68z M29,16c-7.2,0-13,5.8-13,13v22c0,7.2,5.8,13,13,13h22c7.2,0,13-5.8,13-13V29c0-7.2-5.8-13-13-13H29z"></path></svg> <span>Mulher Bonita</span></a>
</div><!--rede-sociais wrapper-->
<div class="redes-sociais-wrapper">
    <a href="https://www.instagram.com/jenniereis.jenniereis/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"

        viewBox="0 0 80 80"
        style=" fill:#000000;"><path fill="#8585cc" d="M61.7,2.5H18.3C9.6,2.5,2.5,9.6,2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4 c8.7,0,15.8-7.1,15.8-15.8V18.3C77.5,9.6,70.4,2.5,61.7,2.5L61.7,2.5z"></path><path fill="#8d8dd8" d="M2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V18.3c0-0.6,0-1.3-0.1-1.9 C64.8,8.6,49.9,4,34,4C24,4,14.4,5.8,5.5,9.1C3.6,11.7,2.5,14.9,2.5,18.3z"></path><path fill="#bd82f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V26.1C65.3,17.3,50.3,12,34,12 c-11.3,0-21.9,2.5-31.5,7V61.7z"></path><path fill="#ed73f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V36.4C65.9,26.2,50.7,20,34,20 c-11.4,0-22.1,2.9-31.5,8V61.7z"></path><path fill="#f97dcd" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V47.7C66.9,35.6,51.3,28,34,28 c-11.6,0-22.4,3.4-31.5,9.3V61.7z"></path><path fill="#fc9c95" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8v-0.4C68.9,46.2,52.7,36,34,36 c-11.9,0-22.9,4.2-31.5,11.2V61.7z"></path><path fill="#ffac99" d="M2.5,58.2v3.5c0,8.7,7.1,15.8,15.8,15.8h43.4c4.8,0,9-2.1,11.9-5.4C67.9,55.7,52.3,44,34,44 C21.5,44,10.2,49.5,2.5,58.2z"></path><path fill="#ffc49c" d="M18.3,77.5h43.4c1.7,0,3.4-0.3,5-0.8C62.6,62.4,49.5,52,34,52c-12.7,0-23.7,7-29.6,17.3 C7.1,74.2,12.3,77.5,18.3,77.5z"></path><path fill="#ffde8d" d="M18.3,77.5h40.3C55,67.3,45.4,60,34,60c-10.5,0-19.6,6.3-23.7,15.3C12.6,76.7,15.4,77.5,18.3,77.5z"></path><path fill="#fff69f" d="M18.3,77.5h31.6c-3-5.7-9-9.5-15.9-9.5c-6.9,0-12.8,3.8-15.9,9.5C18.2,77.5,18.2,77.5,18.3,77.5z"></path><path fill="#8b75a1" d="M62,3c8.3,0,15,6.7,15,15v44c0,8.3-6.7,15-15,15H18C9.7,77,3,70.3,3,62V18C3,9.7,9.7,3,18,3H62 M62,2 H18C9.2,2,2,9.2,2,18v44c0,8.8,7.2,16,16,16h44c8.8,0,16-7.2,16-16V18C78,9.2,70.8,2,62,2L62,2z"></path><path fill="#fff" d="M55 22A3 3 0 1 0 55 28 3 3 0 1 0 55 22zM40 54c-7.7 0-14-6.3-14-14s6.3-14 14-14 14 6.3 14 14S47.7 54 40 54zM40 30c-5.5 0-10 4.5-10 10 0 5.5 4.5 10 10 10 5.5 0 10-4.5 10-10C50 34.5 45.5 30 40 30z"></path><path fill="#fff" d="M51,68H29c-9.4,0-17-7.6-17-17V29c0-9.4,7.6-17,17-17h22c9.4,0,17,7.6,17,17v22 C68,60.4,60.4,68,51,68z M29,16c-7.2,0-13,5.8-13,13v22c0,7.2,5.8,13,13,13h22c7.2,0,13-5.8,13-13V29c0-7.2-5.8-13-13-13H29z"></path></svg><span>Jennie</span></a>
</div><!--rede-sociais wrapper-->
<div class="redes-sociais-wrapper">
    <a href="https://www.instagram.com/beoliveirasales/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"

        viewBox="0 0 80 80"
        style=" fill:#000000;"><path fill="#8585cc" d="M61.7,2.5H18.3C9.6,2.5,2.5,9.6,2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4 c8.7,0,15.8-7.1,15.8-15.8V18.3C77.5,9.6,70.4,2.5,61.7,2.5L61.7,2.5z"></path><path fill="#8d8dd8" d="M2.5,18.3v43.4c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V18.3c0-0.6,0-1.3-0.1-1.9 C64.8,8.6,49.9,4,34,4C24,4,14.4,5.8,5.5,9.1C3.6,11.7,2.5,14.9,2.5,18.3z"></path><path fill="#bd82f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V26.1C65.3,17.3,50.3,12,34,12 c-11.3,0-21.9,2.5-31.5,7V61.7z"></path><path fill="#ed73f4" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V36.4C65.9,26.2,50.7,20,34,20 c-11.4,0-22.1,2.9-31.5,8V61.7z"></path><path fill="#f97dcd" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8V47.7C66.9,35.6,51.3,28,34,28 c-11.6,0-22.4,3.4-31.5,9.3V61.7z"></path><path fill="#fc9c95" d="M2.5,61.7c0,8.7,7.1,15.8,15.8,15.8h43.4c8.7,0,15.8-7.1,15.8-15.8v-0.4C68.9,46.2,52.7,36,34,36 c-11.9,0-22.9,4.2-31.5,11.2V61.7z"></path><path fill="#ffac99" d="M2.5,58.2v3.5c0,8.7,7.1,15.8,15.8,15.8h43.4c4.8,0,9-2.1,11.9-5.4C67.9,55.7,52.3,44,34,44 C21.5,44,10.2,49.5,2.5,58.2z"></path><path fill="#ffc49c" d="M18.3,77.5h43.4c1.7,0,3.4-0.3,5-0.8C62.6,62.4,49.5,52,34,52c-12.7,0-23.7,7-29.6,17.3 C7.1,74.2,12.3,77.5,18.3,77.5z"></path><path fill="#ffde8d" d="M18.3,77.5h40.3C55,67.3,45.4,60,34,60c-10.5,0-19.6,6.3-23.7,15.3C12.6,76.7,15.4,77.5,18.3,77.5z"></path><path fill="#fff69f" d="M18.3,77.5h31.6c-3-5.7-9-9.5-15.9-9.5c-6.9,0-12.8,3.8-15.9,9.5C18.2,77.5,18.2,77.5,18.3,77.5z"></path><path fill="#8b75a1" d="M62,3c8.3,0,15,6.7,15,15v44c0,8.3-6.7,15-15,15H18C9.7,77,3,70.3,3,62V18C3,9.7,9.7,3,18,3H62 M62,2 H18C9.2,2,2,9.2,2,18v44c0,8.8,7.2,16,16,16h44c8.8,0,16-7.2,16-16V18C78,9.2,70.8,2,62,2L62,2z"></path><path fill="#fff" d="M55 22A3 3 0 1 0 55 28 3 3 0 1 0 55 22zM40 54c-7.7 0-14-6.3-14-14s6.3-14 14-14 14 6.3 14 14S47.7 54 40 54zM40 30c-5.5 0-10 4.5-10 10 0 5.5 4.5 10 10 10 5.5 0 10-4.5 10-10C50 34.5 45.5 30 40 30z"></path><path fill="#fff" d="M51,68H29c-9.4,0-17-7.6-17-17V29c0-9.4,7.6-17,17-17h22c9.4,0,17,7.6,17,17v22 C68,60.4,60.4,68,51,68z M29,16c-7.2,0-13,5.8-13,13v22c0,7.2,5.8,13,13,13h22c7.2,0,13-5.8,13-13V29c0-7.2-5.8-13-13-13H29z"></path></svg><span>Bethânia</span></a>
</div><!--rede-sociais wrapper-->
</div><!--container-->
</section>