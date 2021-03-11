<?php 
	session_start();
  include_once("../config/dbcon.php");

  if($_POST){  
	  
    $nome2 = $_SESSION['nome'];
	$idUsuario = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $rua = $_POST['rua'];
    $complemento = $_POST['complemento'];
    $telefone_cel = $_POST['telefone_cel'];
    $email_secundario = $_POST['email_secundario'];
    $email = $_POST['email'];
    $biografia = $_POST['biografia'];

		$testUsername = "SELECT * FROM users WHERE $nome2 = '$nome2'";
		$result = mysqli_query($conn, $testUsername);
		$data = mysqli_fetch_assoc($result);
		$row = mysqli_num_rows($result);
  
    $id = $data['id'];

		if($row == 1 && $id == $idUsuario || $row == 0){ // Estiver fazendo o UPDATE do proprio user
			$sql = "UPDATE users SET email = '$email', email_secundario = '$email_secundario', telefone_cel = '$telefone_cel', nome = '$nome', cpf = '$cpf', rg = '$rg', cep = '$cep', rua = '$rua', cidade = '$cidade', uf = '$uf', bairro = '$bairro',	numero = '$numero', biografia = '$biografia' WHERE id = '$idUsuario'";

			if(mysqli_query($conn, $sql)){
				$_SESSION['sucesso'] = 14;
				echo "
					<script>
						window.history.back();
					</script>";
			} else {
				$_SESSION['sucesso'] = 15;
				echo "
					<script>
						window.history.back();
					</script>";
			}

		} else if($row == 1 && $id != $idUsuario) { // Se já existir outro usuário com esse username não sendo a propria pessoa
			$_SESSION['sucesso'] = 17;
			echo "
				<script>
					window.history.back();
				</script>";
		}

	} else { // NOT POST
			$_SESSION['sucesso'] = 16;
			echo "
				<script>
					window.history.back();
				</script>";
		}
?>