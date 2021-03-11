<?php
include_once("../config/dbcon.php");
session_start();
$id = $_SESSION['nome'];
$query = "SELECT * FROM users WHERE nome = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="pt-br">

<head>
<title>Cadastro de Produtos - Padaria Lor</title>
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
              <div class="col-md-11 col-12 mr-auto ml-auto">
                <!-- Wizard container -->
                <div class="wizard-container">
                  <div class="card card-wizard" data-color="rose" id="wizardProfile">
                    <form action="../controller/salvar_comanda.php" method="POST" enctype="multipart/form-data">
                      <!-- You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue" -->
                      <div class="card-header text-center">
                        <h3 class="card-title">
                          Cadastro de Produtos
                        </h3>
                        <h5 class="card-description">Entre com o pedido do cliente.</h5>
                      </div>
                      <div class="wizard-navigation">
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                              Produtos
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="about">
                            <h5 class="info-text"> Obs. Devido a pandemia haverá um limite de 9 produtos por pessoa.</h5>
                            <div class="row justify-content-center">

                            <div class="col-lg-4 mt-1">
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">filter_1</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInput1">Produto</label>
                                    <select  name="produto1" id="produto1" class="selectpicker" data-style="select-with-transition">
                                      <option value="Pão" selected>Pão</option>
                                    </select>
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
                                    <select id="quantidade1" name="quantidade1" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value=1>1</option>
                                      <option value=2>2</option>
                                      <option value=3>3</option>
                                      <option value=4>4</option>
                                      <option value=5>5</option>
                                      <option value=6>6</option>
                                      <option value=7>7</option>
                                      <option value=8>8</option>
                                      <option value=9>9</option>
                                    </select>
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
                                    <input name="valor1" class="form-control" id="txt1" type="text" value="0" onfocus="calcular()">
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
                                    <label for="exampleInput1">Produto</label>
                                    <select  name="produto2" id="produto2" class="selectpicker" data-style="select-with-transition">
                                      <option value="Sonho" selected>Sonho</option>
                                    </select>
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
                                    <select id="quantidade2" name="quantidade2" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor2" class="form-control" id="txt2" type="text" value="0" onfocus="calcular()">
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
                                    <label for="exampleInput1">Produto</label>
                                    <select  name="produto3" id="produto3" class="selectpicker" data-style="select-with-transition">
                                      <option value="Esfirra" selected>Esfirra</option>
                                    </select>
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
                                    <select id="quantidade3" name="quantidade3" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor3" class="form-control" id="txt3" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto4" id="produto4" class="selectpicker" data-style="select-with-transition">
                                      <option value="Mini-pizza" selected>Mini-pizza</option>
                                    </select>
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
                                    <select id="quantidade4" name="quantidade4" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor4" class="form-control" id="txt4" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto5" id="produto5" class="selectpicker" data-style="select-with-transition">
                                      <option value="Pão com Queijo" selected>Pão com Queijo</option>
                                    </select>
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
                                    <select id="quantidade5" name="quantidade5" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor5" class="form-control" id="txt5" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto6" id="produto6" class="selectpicker" data-style="select-with-transition">
                                      <option value="Pão de Queijo" selected>Pão de Queijo</option>
                                    </select>
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
                                    <select id="quantidade6" name="quantidade6" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor6" class="form-control" id="txt6" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto7" id="produto7" class="selectpicker" data-style="select-with-transition">
                                      <option value="Folheado" selected>Folheado</option>
                                      ?>
                                    </select>
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
                                    <select id="quantidade7" name="quantidade7" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor7" class="form-control" id="txt7" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto8" id="produto8" class="selectpicker" data-style="select-with-transition">
                                      <option value="Tapioca" selected>Tapioca</option>
                                    </select>
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
                                    <select id="quantidade8" name="quantidade8" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor8" class="form-control" id="txt8" type="text" value="0" onfocus="calcular()">
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
                                  <label for="exampleInput1">Produto</label>
                                    <select  name="produto9" id="produto9" class="selectpicker" data-style="select-with-transition">
                                      <option value="Refrigerante" selected>Refrigerante</option>
                                    </select>
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
                                    <select id="quantidade9" name="quantidade9" class="selectpicker" data-style="select-with-transition">
                                      <option value="" selected>Selecione uma quantidade</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                    </select>
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
                                    <input name="valor9" class="form-control" id="txt9" type="text" value="0" onfocus="calcular()">
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 mt-1">
                              <input class="form-control" type="hidden" name="id" value="<?php echo $data['id']?>" readonly>
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
                                    <input name="total" class="form-control" id="result" type="text"/>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="mr-auto">
                        <a class="btn btn-danger pull-right" href="index.php">Voltar </a>
                        </div>
                        <div class="ml-auto">
                          
                          <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Cadastrar" style="display: none;">
                        </div>
                        <div class="clearfix"></div>
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
  <script src="../assets/js/validator.min.js"></script>
  <!-- Mask Field Plugin -->
  <script>
  function calcular(){
    var valor1 = parseInt(document.getElementById('txt1').value, 10);
    var valor2 = parseInt(document.getElementById('txt2').value, 10);
    var valor3 = parseInt(document.getElementById('txt3').value, 10);
    var valor4 = parseInt(document.getElementById('txt4').value, 10);
    var valor5 = parseInt(document.getElementById('txt5').value, 10);
    var valor6 = parseInt(document.getElementById('txt6').value, 10);
    var valor7 = parseInt(document.getElementById('txt7').value, 10);
    var valor8 = parseInt(document.getElementById('txt8').value, 10);
    var valor9 = parseInt(document.getElementById('txt9').value, 10);
    document.getElementById('result').value = valor1 + valor2 + valor3 + valor4 + valor5 + valor6 + valor7 + valor8 + valor9;
}
  </script>
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
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>

  <script>
    $(document).ready(function() {
      var homeopatia = document.getElementById('homeopatia');
      var alopatia = document.getElementById('alopatia');
      var osdois = document.getElementById('osdois');
      var inputHom = document.getElementById('inputHom');
      var inputAlo = document.getElementById('inputAlo');
      var inputOsd = document.getElementById('inputOsd');

      homeopatia.addEventListener('click', function(){
        if(homeopatia.className == 'form-check form-check-inline active'){
          apatia.className = 'form-check form-check-inline';
          alopatia.className = 'form-check form-check-inline';
          inputHom.checked = true;
          inputAlo.checked = false;
          inputOsd.checked = false;

        }
      });

      divPJ.addEventListener('click', function(){
        if(divPJ.className == 'choice active'){
          divPF.className = 'choice';
          ges.className = 'choice';
          ped.className = 'choice';
          sec.className = 'choice';
          psi.className = 'choice';
          ast.className = 'choice';
          inputPJ.checked = true;
          inputPF.checked = false;
          gestor.checked = false;
          pedagogo.checked = false;
          secretario.checked = false;
          psicologo.checked = false;
          assistente.checked = false;
        }
      });

      ges.addEventListener('click', function(){
        if(ges.className == 'choice active'){
          divPF.className = 'choice';
          divPJ.className = 'choice';
          ped.className = 'choice';
          sec.className = 'choice';
          psi.className = 'choice';
          ast.className = 'choice';
          inputPJ.checked = false;
          inputPF.checked = false;
          gestor.checked = true;
          pedagogo.checked = false;
          secretario.checked = false;
          psicologo.checked = false;
          assistente.checked = false;
        }
      });

      ped.addEventListener('click', function(){
        if(ped.className == 'choice active'){
          divPF.className = 'choice';
          divPJ.className = 'choice';
          ges.className = 'choice';
          sec.className = 'choice';
          psi.className = 'choice';
          ast.className = 'choice';
          inputPJ.checked = false;
          inputPF.checked = false;
          gestor.checked = false;
          pedagogo.checked = true;
          secretario.checked = false;
          psicologo.checked = false;
          assistente.checked = false;
        }
      });

      sec.addEventListener('click', function(){
        if(sec.className == 'choice active'){
          divPF.className = 'choice';
          divPJ.className = 'choice';
          ges.className = 'choice';
          ped.className = 'choice';
          psi.className = 'choice';
          ast.className = 'choice';
          inputPJ.checked = false;
          inputPF.checked = false;
          gestor.checked = false;
          pedagogo.checked = false;
          secretario.checked = true;
          psicologo.checked = false;
          assistente.checked = false;
        }
      });

      psi.addEventListener('click', function(){
        if(psi.className == 'choice active'){
          divPF.className = 'choice';
          divPJ.className = 'choice';
          ges.className = 'choice';
          ped.className = 'choice';
          sec.className = 'choice';
          ast.className = 'choice';
          inputPJ.checked = false;
          inputPF.checked = false;
          gestor.checked = false;
          pedagogo.checked = false;
          secretario.checked = false;
          psicologo.checked = true;
          assistente.checked = false;
        }
      });

      ast.addEventListener('click', function(){
        if(ast.className == 'choice active'){
          divPF.className = 'choice';
          divPJ.className = 'choice';
          ges.className = 'choice';
          ped.className = 'choice';
          sec.className = 'choice';
          psi.className = 'choice';
          inputPJ.checked = false;
          inputPF.checked = false;
          gestor.checked = false;
          pedagogo.checked = false;
          secretario.checked = false;
          psicologo.checked = false;
          assistente.checked = true;
        }
      });

    });
  </script>
</body>

</html>
