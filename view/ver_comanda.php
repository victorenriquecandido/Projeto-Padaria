<?php
session_start();
require("../view/menu.php");
include_once("../validate.php");
$_SESSION['id_pagina'] = 'lista'; // ID da página para indentificação no menu
$_SESSION['id_collapse'] = 'crm'; // ID do Collapse para indentificação no menu
$userID = $_SESSION['userID'];
$tipoUser = $_SESSION['tipo_user'];

$id = $_GET['id'];
$query = "SELECT * FROM comanda WHERE id_comanda = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Informações do Usuário - Weaction</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">

    <div class="main-panel">
      <!-- Navbar -->
      <?php require("../view/header.php"); ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->

          <!-- BREAD CRUMB -->
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Visão da Comanda</li>
            </ol>
          </nav>
          <!-- BREAD CRUMB -->

          <div class="col-md-12">
            <div class="container">
              <!-- DADOS DO PLANO-->

              <!-- DADOS DOS BENEFICIARIOS -->
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-danger">
                      <h4 class="card-title">Detalhes da Comanda</h4>
                      <p class="card-category">Comanda</p>
                    </div><br>

                    <div class="tab-pane active" id="about">
                            <div class="row justify-content-center">

                            <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_1</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" id="produto1" value="<?php echo $data['produto1']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade1']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input value="<?php echo $data['valor1']?>" class="form-control" id="txt1" type="text" value="0" onfocus="calcular() ">
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_2</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto2']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade2']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor2']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_3</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto3']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade3']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor3']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_4</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto4']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade4']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor4']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_5</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto5']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade5']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor5']?>"></td>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_6</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto6']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade6']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor6']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_7</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto7']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade7']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor7']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_8</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto8']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade8']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor8']?>"></td>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_9</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="telefone" class="bmd">Produto</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['produto9']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">format_list_numbered</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Quantidade</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['quantidade9']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Preço</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['valor9']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                              </div>

                              <div class="col-lg-4 mt-1">
                              </div>

                              <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">attach_money</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1" >Total</label>
                                    <input class ="form-control" type="text" value="<?php echo $data['total']?>"></td>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                              </div>

                              <div class="col-lg-4 mt-1">
                              </div>

                              <div class="col-lg-4 mt-1">
                                <a class="btn btn-danger pull-right" href="index.php">Voltar </a>
                              </div>

                             
                            </div>
                          </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- FIM DA JANELA DE INFORMAÇÕES -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
  <!-- Mask Field Plugin -->
  <script src="../assets/js/cep.js"></script>
  <script>
    $(document).ready(function() {

      $().ready(function() {
        var sucesso = <?php echo $_SESSION['sucesso']; $_SESSION['sucesso'] = ''; ?>;
        if(sucesso == 1){
          var notify = $.notify('<strong>Cliente</strong> salvo com sucesso.', {
            icon: 'glyphicon glyphicon-alert',
            type: 'success',
            allow_dismiss: true
          });
        } else if(sucesso == 2){
          var notify = $.notify('<strong>Erro</strong> cliente não salvo.', {
            icon: 'glyphicon glyphicon-alert',
            type: 'danger',
            allow_dismiss: true
          });
        }
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>

</body>

</html>
