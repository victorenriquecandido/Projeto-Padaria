<?php
session_start(); 
$_SESSION['id_collapse'] = 'crm'; // ID do Collapse para indentificação no menu

require("../view/menu.php");
include_once("../validate.php");
$userID = $_SESSION['userID'];
$tipoUser = $_SESSION['tipo_user'];
include_once("../config/dbcon.php");


  // query aluno/professor
  $usuario = $_SESSION['nome'];
  $querymeus = "SELECT * FROM comanda";
  $sqlmeus = mysqli_query($conn, $querymeus);

  // query mais vendidos
  $querymaisvendidos = "SELECT * FROM produtos GROUP BY total_vendidos DESC LIMIT 3";
  $sqlmaisvendidos = mysqli_query($conn, $querymaisvendidos);

  // query menos vendidos
  $querymenosvendidos = "SELECT * FROM produtos GROUP BY total_vendidos ASC LIMIT 3";
  $sqlmenosvendidos = mysqli_query($conn, $querymenosvendidos);

  // query aluno/professor
  $hoje = date('Y-m-d');
  $querydiario = "SELECT * FROM ganho_diario WHERE dia = '$hoje'";
  $sqldiario = mysqli_query($conn, $querydiario);
  $diario = mysqli_fetch_assoc($sqldiario);



?>
<!doctype html>
<html lang="pt-br">

<head>
<title>Padaria Lor!</title>
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
  <div class="wrapper ">
    <div class="main-panel">
     <!-- Navbar -->
     <?php require("../view/header.php"); ?>
     <!-- End Navbar -->
      <div class="content">
      <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Produtos mais vendidos</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Produto</th>
                        <th>Total Vendido</th>
                        <th>Valor Total</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Produto</th>
                        <th>Total Vendido</th>
                        <th>Valor Total</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while ($maisvendidos = mysqli_fetch_assoc($sqlmaisvendidos)) { ?>
                        <tr>
                          <td><a value="<?php echo $maisvendidos['produto']; ?>"><?php echo $maisvendidos['produto']; ?></a></td>
                          <td><a value="<?php echo $maisvendidos['total_vendidos']; ?>"><?php echo $maisvendidos['total_vendidos']; ?></a></td>
                          <td><a value="<?php echo $maisvendidos['total_valor']; ?>"><?php echo $maisvendidos['total_valor']; ?></a></td>

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">store</i>
                </div>
                <p class="card-category">Total de ganhos diários</p>
                <h3 class="card-title">R$ <?php echo $diario['ganho_total']; ?></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">date_range</i> Últimas 24 horas
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Produtos menos vendidos</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Produto</th>
                        <th>Total Vendido</th>
                        <th>Valor Total</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Produto</th>
                        <th>Total Vendido</th>
                        <th>Valor Total</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php while ($menosvendidos = mysqli_fetch_assoc($sqlmenosvendidos)) { ?>
                        <tr>
                          <td><a value="<?php echo $menosvendidos['produto']; ?>"><?php echo $menosvendidos['produto']; ?></a></td>
                          <td><a value="<?php echo $menosvendidos['total_vendidos']; ?>"><?php echo $menosvendidos['total_vendidos']; ?></a></td>
                          <td><a value="<?php echo $menosvendidos['total_valor']; ?>"><?php echo $menosvendidos['total_valor']; ?></a></td>

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header card-header-tabs card-header-rose">
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <span class="nav-tabs-title">Listas:
                    </span>
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#comanda" data-toggle="tab">
                          <i class="material-icons">assignment
                          </i> Comandas
                          <div class="ripple-container">
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="comanda">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                              <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title"> Lista de Comandas</h4>
                          </div>
                          <div class="card-body">
                            <div class="toolbar">
                              <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                              <table id="datatables1" class="table table-striped table-no-bordered table-hover datatables" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>Número da Comanda</th>
                                    <th>Funcionário</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                    <th>Número da Comanda</th>
                                    <th>Funcionário</th>
                                  </tr>
                                </tfoot>
                                <tbody>
                                  <?php while ($pessoa = mysqli_fetch_assoc($sqlmeus)){ ?>
                                    <tr>
                                      <td><a href="ver_comanda.php?id=<?php echo $pessoa['id_comanda']; ?>" value="<?php echo $pessoa['id_comanda']; ?>"><?php echo $pessoa['id_comanda'];?></a></td>
                                      <?php $idnome = $pessoa['cad_feito_por'];
                                            $sqlnome = "SELECT * FROM users WHERE id = '$idnome'";
                                            $querydata = mysqli_query($conn, $sqlnome);
                                            $datanome = mysqli_fetch_assoc($querydata);?>
                                      <td><a href="../view/user.php?id=<?php echo $datanome['nome']; ?>" value="<?php echo $datanome['nome']; ?>"><?php echo $datanome['nome'];?></a></td>
                                      
                                    </tr>
                                  <?php } ?>


                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- end content-->
                        </div>
                        <!--  end card  -->
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- start: Delete Coupon Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h3 class="modal-title" id="myModalLabel">Exclusão de registro</h3>

            </div>
            <div class="modal-body">
                 <h4> Você gostaria de deletar este item?</h4>

            </div>
            <!--/modal-body-collapse -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnDelteYes" href="#">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
            <!--/modal-footer-collapse -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- Mask & Validator -->
  <script src="../assets/js/validator.min.js"></script>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
  <script>
    // Alert Config
    var sucesso = <?php echo $_SESSION['sucesso']; $_SESSION['sucesso'] = ''; ?>;
    if(sucesso == 1){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">check</i></div> <strong>Comanda</strong> adicionada com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 2){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">warning</i></div> <strong>Erro: </strong> Os campos não podem estar vazios.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 3){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro:</strong> Julgado não adicionado.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 4){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">warning</i></div> <strong>Julgado</strong> excluído com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'warning',
        allow_dismiss: true
      });
    } else if(sucesso == 5){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro:</strong>Julgado não excluído.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 6){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro:</strong> Selecione um Julgado.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 7){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite</i></div> <strong>Julgado</strong> favoritado com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 8){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro: </strong> Julgado não favoritado, tente novamente mais tarde.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 9){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite</i></div> <strong>Julgado</strong> desfavoritado com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 10){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite_border</i></div> <strong>Julgado</strong> atualizado com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 11){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite_border</i></div> <strong>Erro: </strong> Julgado não atualizado.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 12){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite_border</i></div> <strong>Comentário</strong> adicionado com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 13){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">favorite_border</i></div> <strong>Erro: </strong> Comentário não adicionado.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 14){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">check</i></div> <strong>Conta </strong> atualizada com sucesso.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'success',
        allow_dismiss: true
      });
    } else if(sucesso == 15){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">check</i></div> <strong>Erro: </strong> Conta não atualizada. Tente novamente mais tarde.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 16){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro: </strong> Conta desconhecida.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } else if(sucesso == 17){
      var notify = $.notify('<div class="alert-icon"><i class="material-icons">error_outline</i></div> <strong>Erro: </strong> Este usuário já está sendo utilizado.', {
        icon: 'glyphicon glyphicon-alert',
        type: 'danger',
        allow_dismiss: true
      });
    } 
    
  </script>

</body>

</html>
