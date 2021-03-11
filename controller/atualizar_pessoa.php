<?php 
    session_start();
    include_once("../config/dbcon.php");
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
    $id = $_POST['id'];
    $foto = $_FILES["foto"];

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
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        // Caminho de onde ficará a imagem
        $caminho_imagem = "../assets/img/alunos/" . $nome_imagem;
        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);

        $sql = "UPDATE users SET nome = '$nome', cpf = '$cpf', rg = '$rg', uf = '$uf', cidade = '$cidade'," +
               " cep = '$cep', bairro = '$bairro', numero = '$numero', rua = '$rua', complemento = '$complemento'," +
               " telefone_cel = '$telefone_cel', email = '$email', email_secundario = '$email_secundario', foto = '$nome_imagem' WHERE id = '$id'";

        if(mysqli_query($conn, $sql)){
            $_SESSION['sucesso'] = 6;
            echo "
                <script>
                window.location = ('../view/index.php');
                </script>";
        } else {
            $_SESSION['sucesso'] = 4;
            echo "
                <script>
                window.location = ('../view/index.php');
                </script>";
        }
    }
    $sql = "UPDATE users SET nome = '$nome', cpf = '$cpf', rg = '$rg', uf = '$uf', cidade = '$cidade'," +
               " cep = '$cep', bairro = '$bairro', numero = '$numero', rua = '$rua', complemento = '$complemento'," +
               " telefone_cel = '$telefone_cel', email = '$email', email_secundario = '$email_secundario' WHERE id = '$id'";

        if(mysqli_query($conn, $sql)){
            $_SESSION['sucesso'] = 6;
            echo "
                <script>
                window.location = ('../view/index.php');
                </script>";
        } else {
            $_SESSION['sucesso'] = 4;
            echo "
                <script>
                window.location = ('../view/index.php');
                </script>";
        }

?>