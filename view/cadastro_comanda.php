<?php 
$_SESSION['id_pagina'] = 'cadastro_comanda'; // ID da página para indentificação no menu
$_SESSION['id_collapse'] = 'crm'; // ID do Collapse para indentificação no menu

?>

<!doctype html>
<html lang="pt-br">

<head>
<title>Cadastro de Comanda - Padaria Lor</title>
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
     <!-- Navbar -->
     <!-- End Navbar -->
      <div class="content">
      
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="pessoasfisicas">
              <div class="col-md-6 col-12 mr-auto ml-auto">
                <!-- Wizard container -->
                <div class="wizard-container">
                  <div class="card card-wizard" data-color="rose" id="wizardProfile">

                      <!-- You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue" -->
                      <div class="card-header text-center">
                        <h3 class="card-title">
                          Cadastro de Comandas
                        </h3>
                        <h5 class="card-description">Aqui você selecionará sua comanda, depois iremos lhe redirecionar!</h5>
                      </div>

                      <!-- Navegação dentro do cadastro -->
                      <div class="wizard-navigation">
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                              comanda
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- Fim da navegação -->

                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane" id="account">
                            <h5 class="info-text"> Selecione a comanda abaixo.</h5>
                            <div class="row justify-content-center">
                              <div class="col-lg-10">
                                <div class="row justify-content-center">

                                  <!-- Botão de cadastro Comanda -->
                                  <div class="col-sm-6">
                                    <div class="choice" id="divPF" data-toggle="wizard-checkbox">                                    
                                      <center>
                                        <div class="round-button">
                                              <div class="round-button-border"></div>
                                              <div class="round-button-circle"><a href="comanda.php" class="round-button"><i class="material-icons" style="margin-top: -46px">assignment</i></a></div>
                                        </div>  
                                      </center>
                                      <h6>comanda</h6>
                                    </div>
                                  </div>

                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- wizard container -->

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
  
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
</body>

</html>
