<?php 
include_once("../config/dbcon.php");
//Pegando os dados
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$pwd = password_hash($pwd, PASSWORD_ARGON2I, ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);
$tipo_user = $_POST['tipo_user'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone_cel'];
$rg = $_POST['rg'];
$data_nasc = $_POST['data_nasc'];
$sexo = $_POST['sexo'];
$est_civ = $_POST['est_civ'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cad_feito_por = $_SESSION['userID'];
$foto = $_FILES["foto"];



// Se a foto estiver sido selecionada
if (!empty($foto["name"])) {

  // Largura máxima em pixels
  $largura = 5000;
  // Altura máxima em pixels
  $altura = 5000;
  // Tamanho máximo do arquivo em bytes
  $tamanho = 10000000;
  // Pega extensão da imagem
  preg_match("/.(gif|bmp|png|jpg|jpeg)$/i", $foto["name"], $ext);
  // Gera um nome único para a imagem
  $nome_foto = md5(uniqid(time())) . "." . $ext[1];
  // Caminho de onde ficará a imagem
  $caminho_foto = "../assets/img/users/" . $nome_foto;
  // Faz o upload da imagem para seu respectivo caminho
  move_uploaded_file($foto["tmp_name"], $caminho_foto);
    


  $sql = "INSERT INTO users (pwd, email, nome, cpf, telefone_cel, telefone_res, rg, data_nasc, sexo, cep, rua, numero, bairro, cidade, complemento, uf, foto) VALUES";
  $sql .= "('$pwd', '$email', '$nome', '$cpf', '$telefone_cel', '$telefone_res', '$rg', '$data_nasc', '$sexo', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$complemento', '$uf', '$nome_foto')";
    if (mysqli_query($conn, $sql)) {
      echo 
      "<script>
          window.location = ('../view/index.php');
      </script>";
      $_SESSION['sucesso'] = 3;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

} 

$sql = "INSERT INTO users (pwd, email, nome, cpf, telefone_cel, telefone_res, rg, data_nasc, sexo, cep, rua, numero, bairro, cidade, complemento, uf) VALUES";
  $sql .= "('$pwd', '$email', '$nome', '$cpf', '$telefone_cel', '$telefone_res', '$rg', '$data_nasc', '$sexo', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$complemento', '$uf')";
    if (mysqli_query($conn, $sql)) {
      echo 
      "<script>
          window.location = ('../view/index.php');
      </script>";
      $_SESSION['sucesso'] = 3;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>