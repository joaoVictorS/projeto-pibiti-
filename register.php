<?php session_start();?>
<!DOCTYPE html>
<?php require 'classe/config.php'; require 'classe/conecta.php' ?> 
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark" style="background-image: url(img/header-bg.jpg);">

    <div class="container">
        <form method = "post" action ="classe/cadastro.php">
        <div class="card card-register mx-auto mt-5">
        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" id="firstName" class="form-control" placeholder="Nome da empresa" required="required" autofocus="autofocus" name = "firstName">
                        <label for="firstName">nome da empresa</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" id="lastName" class="form-control" placeholder="cnpj" required="required" name = "cnpj">
                        <label for="lastName">cnpj</label>
                    </div>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name = "email">
                    <label for="inputEmail">Email da empresa</label>
                </div>
                </div>
                <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name = "senha">
                        <label for="inputPassword">Senha</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" name = "conf_senha">
                        <label for="confirmPassword">Confirmação da senha</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-label-group" style = "margin-top: 10px; ">
                    tipo de empresa: 
                    <input type="checkbox" name="vehicle1" value="produto" name="elementos[]"> Produto
                    <input type="checkbox" name="vehicle2" value="servico" name="elementos[]"> Servico<br>
                    </div>
                    </div>
                </div>
                </div>
                <a class="btn btn-primary btn-block" href="classe/cadastro.php">Register</a>
                <input type = "submit" value = "test">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </form>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
