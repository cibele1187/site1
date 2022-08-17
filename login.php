<?php 

	

	function criarSessaoCliente($usuario){
			session_start();
			$_SESSION["login"]=$_POST["login"];
			header(‘Location:areacliente.php’);
			exit;
		}
		if (isset($_POST['login'])) {
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];


			try {
				$banco = new PDO("mysql: host=localhost; banconame= login", "ifpb", "ifpb");
				$consulta = "select usuario, senha form usuario where usuario = '$usuario' and senha = '$senha'";		

					foreach ($banco -> query ($consulta as $tupla) {
						criarSessaoCliente($usuario);
					}
				
			}
			catch(PDOExeception $e){
				echo $e -> getMessage;
			}
		}
		include "login.html";
 ?>
