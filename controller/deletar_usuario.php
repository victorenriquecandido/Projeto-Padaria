<?php 

    $id = $_GET['id'];

    include_once("../config/dbcon.php");
    $sql = "DELETE FROM `padaria_lor`.`users` WHERE `users`.`id` = $id";
    mysqli_query($conn,$sql) or die("Erro");
    mysqli_close($conn);

    echo "
        <script>
            alert('Usuário deletado com sucesso!');
            window.location = ('../login/index.php');
        </script>";
?>