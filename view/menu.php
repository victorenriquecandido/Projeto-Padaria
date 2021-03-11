<?php
$pagina = $_SESSION['id_pagina'];
$collapse = $_SESSION['id_collapse'];
$_SESSION['id_pagina'] = '';
$_SESSION['id_collapse'] = '';
include_once("../validate.php");
include_once("../config/dbcon.php");

$userID = $_SESSION['userID'];
$nome = $_SESSION['nome'];

$queryfoto = "SELECT * FROM users WHERE id = '$userID'";
$achafoto = mysqli_query($conn, $queryfoto);
$foto = mysqli_fetch_assoc($achafoto);

function TrataNome ($nome){
  $nomecompleto = $_SESSION['nome'];
  $pedaços = explode(" ", $nomecompleto);
  $usernome = $pedaços[0];
  $usernome .= ' ';
  $usernome .= $pedaços[1];

  $_SESSION['nome_tratado'] = $usernome;

  return $usernome;
}





?>
<!doctype html>
<html lang="pt-br">

<head>
<title>Padaria Lor</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- Material Kit CSS -->
<link href="../assets/css/.min.css?v=2.1.1" rel="stylesheet" />
<link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
<link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          <img src="../assets/img/logo-branco.png" width="250px">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="../assets/img/users/sem-foto.jpg"/>
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo TrataNome($_SESSION['nome']); ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item <?php echo $pagina == 'user'?'active':'' ?>">
                  <a class="nav-link" href="user.php">
                    <i class="material-icons">person</i>
                    <span class="sidebar-normal"> Meu Perfil </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sair.php">
                    <i class="material-icons">close</i>
                    <span class="sidebar-normal"> Sair </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <ul class="nav">
        <li class="nav-item <?php echo $collapse == 'crm'?'active':'' ?>">
          <a class="nav-link" data-toggle="collapse" href="#" data-target="#div-crm">
            <i class="material-icons">supervisor_account</i>
              <p>CRM
                <b class="caret"></b>
              </p>
          </a>
          <div class="collapse" id="div-crm">
            <ul class="nav">
              <li class="nav-item <?php echo $pagina == 'cadastro_comanda'?'active':'' ?>">
                <a class="nav-link" href="cadastro_comanda.php">
                  <i class="material-icons">assignment</i>
                    <p>Comanda</p>
                </a>
              </li>

            </ul>            
          </div>
        </li>              
      </ul>
    </div>
  </div>
</body>
</html>