<?php
class Usuario{

		public function atualizarUsuario($nome,$senha,$imagem){
			$sql = MySql::conectar()->prepare("UPDATE `tb_admin` SET nome = ?, senha= ?,img = ? WHERE user = ?");
			if($sql->execute(array($nome,$senha,$imagem,$_SESSION['user']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($user){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin` WHERE user=?");
			$sql->execute(array($user));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($nome,$login,$senha,$imagem){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin` VALUES (null,?,?,?,?)");
			$sql->execute(array($nome,$login,$senha,$imagem));
		}

	}

?>