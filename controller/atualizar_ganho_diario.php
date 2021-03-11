<?php 
    session_start();
    include_once("../config/dbcon.php");

    $total2 = $_GET['total'];
    $hoje3 = date('Y-m-d');
    $queryganho = "SELECT ganho_total FROM ganho_diario WHERE dia = '$hoje'";
    $sqlganho = mysqli_query($conn, $queryganho);
    $ganho_total = mysqli_fetch_assoc($sqlganho);
    $total = $ganho_total['ganho_total'];
    

        $sql = "UPDATE ganho_diario SET ganho_total = ganho_total + '$total2'  WHERE dia = '$hoje3'";

        if(mysqli_query($conn, $sql)){
            $_SESSION['sucesso'] = 1;
            echo "
                <script>
                    window.location = ('../controller/atualizar_quantidade_produtos.php');
                </script>";
        } else {
            $_SESSION['sucesso'] = 2;
            echo "
                <script>
                    window.location = ('../controller/atualizar_quantidade_produtos.php');
                </script>";
        }

?>