<?php 
    session_start();
    include_once("../config/dbcon.php");
    //query total vendidos
    $queryvendidos = "SELECT * FROM produtos";
    $sqlvendidos = mysqli_query($conn, $queryvendidos);
    $total_vendidos = mysqli_fetch_assoc($sqlvendidos);
    $total_vend = $total_vendidos['total_vendidos'];
    $total_val = $total_vendidos['total_valor'];
      //query soma quantidade
    $queryquantidade1 = "SELECT sum(quantidade1) AS total1 FROM comanda";
    $sqlquantidade1 = mysqli_query($conn, $queryquantidade1);
    $qnt1 = mysqli_fetch_assoc($sqlquantidade1);
    $quant1 = $qnt1['total1'];
    //query soma quantidade2
    $queryquantidade2 = "SELECT sum(quantidade2) AS total2 FROM comanda";
    $sqlquantidade2 = mysqli_query($conn, $queryquantidade2);
    $qnt2 = mysqli_fetch_assoc($sqlquantidade2);
    $quant2 = $qnt1['total2'];
    //query soma quantidade3
    $queryquantidade3 = "SELECT sum(quantidade3) AS total3 FROM comanda";
    $sqlquantidade3 = mysqli_query($conn, $queryquantidade3);
    $qnt3 = mysqli_fetch_assoc($sqlquantidade3);
    $quant3 = $qnt1['total3'];
    //query soma quantidade4
    $queryquantidade4 = "SELECT sum(quantidade4) AS total4 FROM comanda";
    $sqlquantidade4 = mysqli_query($conn, $queryquantidade4);
    $qnt4 = mysqli_fetch_assoc($sqlquantidade4);
    $quant4 = $qnt1['total4'];
    //query soma quantidade5
    $queryquantidade5 = "SELECT sum(quantidade5) AS total5 FROM comanda";
    $sqlquantidade5 = mysqli_query($conn, $queryquantidade5);
    $qnt5 = mysqli_fetch_assoc($sqlquantidade5);
    $quant5 = $qnt1['total5'];
    //query soma quantidade6
    $queryquantidade6 = "SELECT sum(quantidade6) AS total6 FROM comanda";
    $sqlquantidade6 = mysqli_query($conn, $queryquantidade6);
    $qnt6 = mysqli_fetch_assoc($sqlquantidade6);
    $quant6 = $qnt1['total6'];
    //query soma quantidade7
    $queryquantidade7 = "SELECT sum(quantidade7) AS total7 FROM comanda";
    $sqlquantidade7 = mysqli_query($conn, $queryquantidade7);
    $qnt7 = mysqli_fetch_assoc($sqlquantidade7);
    $quant7 = $qnt1['total7'];
    //query soma quantidade8
    $queryquantidade8 = "SELECT sum(quantidade8) AS total8 FROM comanda";
    $sqlquantidade8 = mysqli_query($conn, $queryquantidade8);
    $qnt8 = mysqli_fetch_assoc($sqlquantidade8);
    $quant8 = $qnt1['total8'];
    //query soma quantidade9
    $queryquantidade9 = "SELECT sum(quantidade9) AS total9 FROM comanda";
    $sqlquantidade9 = mysqli_query($conn, $queryquantidade9);
    $qnt9 = mysqli_fetch_assoc($sqlquantidade9);
    $quant9 = $qnt1['total9'];

    //query soma valor
    $queryvalor1 = "SELECT sum(valor1) AS total11 FROM comanda";
    $sqlvalor1 = mysqli_query($conn, $queryvalor1);
    $vlr1 = mysqli_fetch_assoc($sqlvalor1);
    $val1 = $vlr1['total11'];
    //query soma valor2
    $queryvalor2 = "SELECT sum(valor2) AS total22 FROM comanda";
    $sqlvalor2 = mysqli_query($conn, $queryvalor2);
    $vlr2 = mysqli_fetch_assoc($sqlvalor2);
    $val2 = $vlr1['total22'];
    //query soma valor3
    $queryvalor3 = "SELECT sum(valor3) AS total33 FROM comanda";
    $sqlvalor3 = mysqli_query($conn, $queryvalor3);
    $vlr3 = mysqli_fetch_assoc($sqlvalor3);
    $val3 = $vlr1['total33'];
    //query soma valor4
    $queryvalor4 = "SELECT sum(valor4) AS total44 FROM comanda";
    $sqlvalor4 = mysqli_query($conn, $queryvalor4);
    $vlr4 = mysqli_fetch_assoc($sqlvalor4);
    $val4 = $vlr1['total44'];
    //query soma valor5
    $queryvalor5 = "SELECT sum(valor5) AS total55 FROM comanda";
    $sqlvalor5 = mysqli_query($conn, $queryvalor5);
    $vlr5 = mysqli_fetch_assoc($sqlvalor5);
    $val5 = $vlr1['total55'];
    //query soma valor6
    $queryvalor6 = "SELECT sum(valor6) AS total66 FROM comanda";
    $sqlvalor6 = mysqli_query($conn, $queryvalor6);
    $vlr6 = mysqli_fetch_assoc($sqlvalor6);
    $val6 = $vlr1['total66'];
    //query soma valor7
    $queryvalor7 = "SELECT sum(valor7) AS total77 FROM comanda";
    $sqlvalor7 = mysqli_query($conn, $queryvalor7);
    $vlr7 = mysqli_fetch_assoc($sqlvalor7);
    $val7 = $vlr1['total77'];
    //query soma valor8
    $queryvalor8 = "SELECT sum(valor8) AS total88 FROM comanda";
    $sqlvalor8 = mysqli_query($conn, $queryvalor8);
    $vlr8 = mysqli_fetch_assoc($sqlvalor8);
    $val8 = $vlr1['total88'];
    //query soma valor9
    $queryvalor9 = "SELECT sum(valor9) AS total99 FROM comanda";
    $sqlvalor9 = mysqli_query($conn, $queryvalor9);
    $vlr9 = mysqli_fetch_assoc($sqlvalor9);
    $val9 = $vlr1['total99'];

    

        $sql = "UPDATE produtos SET total_vendidos = '$quant1', total_valor ='$val1' WHERE id_produto = 1";

        if(mysqli_query($conn, $sql)){
            $_SESSION['sucesso'] = 1;
            echo "
                <script>
                    window.location = ('../view/index.php');
                </script>";
        } else {
            $_SESSION['sucesso'] = 2;
            echo "
                <script>
                    window.location = ('../view/index.php');
                </script>";
        }

?>