<?php session_start(); ?>
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
  <style>
  body {
  font-family: Arial, sans-serif;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}
.box1 {
  width: 40%;
  margin: 0 auto;
  padding: 35px;
  background-clip: padding-box;
  text-align: center;
  
}
.box2 {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}
.box3 {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  background:
  color: black;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
  </style>
  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="logado.php">G-master</a>

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
        <li class="nav-item active">
          <a class="nav-link" href="logado.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3" style="max-width: 20%">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">Estrutura de capital</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="estruturadecapital.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3" style="max-width: 18%">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Liquidez</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="liquidez.php ">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3" style="max-width: 20%">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Rentabilidade</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="rentabilidade.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3" style="max-width: 20%">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Prazos medios</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="prazos_medios.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3" style="max-width: 20%">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">Capital de giro</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="capital_de_giro.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

         
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Informe os dados de rentabilidade</div>
              <div style=" width:850px;margin-left:15%;   border: 2px solid none;margin-top:10px; ">
              <form method= "POST" action = "classe/cad_rentabilidade.php">
              <p style = "padding:10px;">Giro do ativo <input type="text" name="vl" placeholder = "Qual sua receita líquida mensal?" style = "width: 35%; margin-left : 68px;">
              <input type="text" name="at" placeholder = "Estoques + valores dos bens" style = "width: 38%; margin-left : 10px;"></p>   
                <div class="box" style =" margin-left:760px; margin-top:-90px; width:30px;height:30px; position:absolute;">
                    <a class="button" href="#popup1"><img src="inform.gif" alt="Smiley face" height="22" width="22"></a>
                  </div>

                  <div id="popup1" class="overlay">
                    <div class="popup">
                      <h2>Giro Ativo</h2>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                      valores que representam o quanto a empresa obtém de receita pela quantidade que vende.
                      </div>
                    </div>
                  </div>
                  <div class="box" style =" margin-left:760px; margin-top:-30px; width:30px;height:30px; ">
                    <a class="button" href="#popup2"><img src="inform.gif" alt="Smiley face" height="22" width="22"></a>
                  </div>

                  <div id="popup2" class="overlay">
                    <div class="popup">
                      <h2>Margem Liquida</h2>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                      valores que representam quanto a empresa tem de ganho real pelo preço que está operando no mercado.
                      </div>
                    </div>
                  </div>
              <p style = "padding:10px; margin-top:-50px;">Margem liquida  <input type="text" name="ll" placeholder = "Vendas brutas-desconto" style = "width: 35%; margin-left : 48px;">
              <input type="text" name="vl" placeholder = "abatimentos e impostos sobre vendas-cmv" style = "width: 38%; margin-left : 10px;"></p>   
                <div class="box" style =" margin-left:760px; margin-top:-30px; width:30px;height:30px; ">
                    <a class="button" href="#popup3"><img src="inform.gif" alt="Smiley face" height="22" width="22"></a>
                  </div>

                  <div id="popup3" class="overlay">
                    <div class="popup">
                      <h2>Rentabilidade de ativo</h2>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                      valores que representam o quanto a empresa está ganhando dado os bens e direitos que estejam de posse da empresa.
                      </div>
                    </div>
                  </div>
                  
             
              <p style = "padding:10px; margin-top:-50px;">Rentabilidade do ativo <input type="text" name="ll" placeholder = "lucro liquido" style = "width: 35%; margin-left : 0px;">
              <input type="text" name="at" placeholder = "Ativo total" style = "width: 38%; margin-left : 10px;"></p>   
              <div class="box" style =" margin-left:760px; margin-top:-30px; width:30px;height:30px; ">
                    <a class="button" href="#popup4"><img src="inform.gif" alt="Smiley face" height="22" width="22"></a>
                  </div>

                  <div id="popup4" class="overlay">
                    <div class="popup">
                      <h2>Rentabilidade do PL</h2>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                      valores que representam o que os sócios/proprietário (s) estão tendo de retorno dado seu investimento
                      </div>
                    </div>
                  </div>
              <p style = "padding:10px; margin-top:-50px;">Rentabilidade do PL  <input type="text" name="ll" placeholder ="lucro liquido" style = "width: 35%; margin-left : 20px;">
              <input type="text" name="plm" placeholder = "quanto foi investido" style = "width: 38%; margin-left : 10px;"></p>
              <input type = "submit" value = "enviar" style = "background-color:#007bff; color:white; border-color:#007bff; border:10px; padding:7px; margin-left:420px; width:100px;">            
              </form><br>
            </div><br>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

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
            <a class="btn btn-primary" href="index.php">Logoutaa</a>
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
