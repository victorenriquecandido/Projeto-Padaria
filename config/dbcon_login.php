<?php
  include_once("dbcon.php");

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