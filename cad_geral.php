<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="logado.php" >G-master</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
         <?php echo "<i style ='color:white;'>seja bem vindo, ".$_SESSION['nome_emp']."</i>" ?>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="cad_geral.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Dados</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Graficos</span></a>
        </li>
     
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#"></a>
            </li>
            <li class="breadcrumb-item active">Cadastro de informações da empresa</li>
          </ol>

          <!-- Icon Cards-->
          <div style= "padding:10px; margin-left:5%;">
          <form  action= "classe/cad_gerall.php" method = "POST">
            <!-- Form Name -->
            <legend style = "border-bottom : 2px solid grey;">Ativo</legend>

            <p> DUPLICATAS A RECEBER (Clientes ou Duplicatas emitidas ou cheques a prazo <input name = "duplicatas_a_receber" style = "margin-left:10px; width : 300px;" type= "text"/></p>
            <p style = "margin-left:243px;">CAIXA (dinheiro e cheque  não depositado) <input name = "caixa" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:480px;"> BANCOS <input name = "bancos" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:50px;"> APLICAÇÃO FINANCEIRA DE CURTO PRAZO (caderneta de poupança) <input name = "aplicacao_financeira_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:295px;"> ATIVO CIRCULANTE OPERACIONAL<input name = "ativo_circulante_operacional" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:360px;">Ativo circulante financeiro<input name = "ativo_circulante_financeiro" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left: 463px;"> ESTOQUES <input name = "estoques" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:340px;"> Outros ativos de curto prazo<input name = "outros_ativos_de_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>

              <!-- Form Name -->
              <legend style = "border-bottom : 2px solid grey;">Passivo</legend>

            <p style = "margin-left:380px"> PASSIVO CIRCULANTE <input name = "duplicatas_a_receber" style = "margin-left:10px; width : 300px;" type= "text"/></p>
            <p style = "margin-left:285px;">PASSIVO CIRCULANTE  FINANCEIRO <input name = "caixa" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:300px;"> EMPRÉSTIMOS DE CURTO PRAZO <input name = "bancos" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:270px;"> PASSIVO CIRCULANTE  OPERACIONAL <input name = "aplicacao_financeira_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:212px;"> FORNCEDORES (Duplicatas a Pagar ou aceitas)<input name = "ativo_circulante_operacional" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:400px;">SALÁRIOS A PAGAR<input name = "ativo_circulante_financeiro" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left: 442px;">13º A PAGAR <input name = "estoques" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:420px;"> FÉRIAS A PAGAR<input name = "outros_ativos_de_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:430px;"> INSS A PAGAR <input name = "aplicacao_financeira_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:432px;"> FGTS A PAGAR<input name = "ativo_circulante_operacional" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:430px;">ICMS A PAGAR<input name = "ativo_circulante_financeiro" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left: 449px;">IR A PAGAR <input name = "estoques" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:448px;"> CS A PAGAR<input name = "outros_ativos_de_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:405px;"> SIMPLES A PAGAR<input name = "outros_ativos_de_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <!-- Form Name -->
            <legend style = "border-bottom : 2px solid grey;">Passivo não circulante</legend>

            <p> DUPLICATAS A RECEBER (Clientes ou Duplicatas emitidas ou cheques a prazo <input name = "duplicatas_a_receber" style = "margin-left:10px; width : 300px;" type= "text"/></p>
            <p style = "margin-left:243px;">CAIXA (dinheiro e cheque  não depositado) <input name = "caixa" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:480px;"> BANCOS <input name = "bancos" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:50px;"> APLICAÇÃO FINANCEIRA DE CURTO PRAZO (caderneta de poupança) <input name = "aplicacao_financeira_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:295px;"> ATIVO CIRCULANTE OPERACIONAL<input name = "ativo_circulante_operacional" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:360px;">Ativo circulante financeiro<input name = "ativo_circulante_financeiro" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left: 463px;"> ESTOQUES <input name = "estoques" style = "margin-left:10px; width: 300px;" type= "text"/></p>
            <p style = "margin-left:340px;"> Outros ativos de curto prazo<input name = "outros_ativos_de_curto_prazo" style = "margin-left:10px; width: 300px;" type= "text"/></p>
      

            <input type = "submit" value = "enviar">
            </form>

          </div>

         
   

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <a class="btn btn-primary" href="classe/sair.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
