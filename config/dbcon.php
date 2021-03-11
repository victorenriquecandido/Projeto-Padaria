<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['start_login'])) { // se não tiver pego tempo que logou
    $_SESSION['start_login'] = time(); //pega tempo que logou
    // adiciona 30 segundos ao tempo e grava em outra variável de sessão
    $_SESSION['logout_time'] = $_SESSION['start_login'] + 30 * 600; 
}

  $local = false;

  if($local == true){
    define("SERVERNAME", "localhost");
    define("PASSWORD", "Weloveus2!");
  }else{
    define("SERVERNAME", "localhost");
    define("PASSWORD", "Weloveus2!");
  }

  /* Dados do Banco de Dados a conectar */
  $servername = SERVERNAME;
  $database = "padaria_lor";
  $username = "weaction";
  $password = PASSWORD;
  $conn = mysqli_connect($servername, $username, $password, $database);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

?>