<?php
  include_once("config/dbcon.php");

  if(!isset($_SESSION['user'])) {
    header('Location: ../login/index.php');
  } else {
    $user = $_SESSION['user'];
    $query = "SELECT * FROM users WHERE username = '$user'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    $_SESSION['tipo_user'] = $data['tipo_user'];
    $_SESSION['userID'] = $data['id'];
    $_SESSION['username'] = $data['username'];

    // Lockscreen system
    $time = time();

    $time_exp = $time - $_SESSION['exp_time'];
    $time_logout = $time - $_SESSION['logout_time'];

    if($time_logout > 60){
      header('Location: ../sair.php');
    } else {
      if($time_exp > 30){
        header('Location: ../login/lock.php');
      } else {
        $_SESSION['exp_time'] + 60 * 60;
        $_SESSION['logout_time'] + 30 * 60;
      }
    }
    
  }
?>