<?php 
include_once("../config/dbcon.php");
session_start();
//Pegando os dados
$produto1 = $_POST['produto1'];
$quantidade1 = $_POST['quantidade1'];
$valor1 = $_POST['valor1'];
$produto2 = $_POST['produto2'];
$quantidade2 = $_POST['quantidade2'];
$valor2 = $_POST['valor2'];
$produto3 = $_POST['produto3'];
$quantidade3 = $_POST['quantidade3'];
$valor3 = $_POST['valor3'];
$produto4 = $_POST['produto4'];
$quantidade4 = $_POST['quantidade4'];
$valor4 = $_POST['valor4'];
$produto5 = $_POST['produto5'];
$quantidade5 = $_POST['quantidade5'];
$valor5 = $_POST['valor5'];
$produto6 = $_POST['produto6'];
$quantidade6 = $_POST['quantidade6'];
$valor6 = $_POST['valor6'];
$produto7 = $_POST['produto7'];
$quantidade7 = $_POST['quantidade7'];
$valor7 = $_POST['valor7'];
$produto8 = $_POST['produto8'];
$quantidade8 = $_POST['quantidade8'];
$valor8 = $_POST['valor8'];
$produto9 = $_POST['produto9'];
$quantidade9 = $_POST['quantidade9'];
$valor9 = $_POST['valor9'];
$hoje2 = date('Y-m-d');

$total = $_POST['total'];
$cad_feito_por = $_POST['id'];



  $sql = "INSERT INTO comanda (produto1, quantidade1, valor1, produto2, quantidade2, valor2, produto3, quantidade3, valor3, produto4, quantidade4, valor4, produto5, quantidade5, valor5, produto6, quantidade6, valor6, produto7, quantidade7, valor7, produto8, quantidade8, valor8, produto9, quantidade9, valor9, total, cad_feito_por) VALUES";
  $sql .= "('$produto1', '$quantidade1', '$valor1', '$produto2', '$quantidade2', '$valor2', '$produto3', '$quantidade3', '$valor3', '$produto4', '$quantidade4', '$valor4', '$produto5', '$quantidade5', '$valor5', '$produto6', '$quantidade6', '$valor6', '$produto7', '$quantidade7', '$valor7', '$produto8', '$quantidade8', '$valor8', '$produto9', '$quantidade9', '$valor9', '$total', '$cad_feito_por')";
  
    if (mysqli_query($conn, $sql, $sql2)) {
      
          echo 
          "<script>
              window.location = ('../controller/atualizar_ganho_diario.php?total=$total');
          </script>";
                mysqli_close($conn);
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }




?>