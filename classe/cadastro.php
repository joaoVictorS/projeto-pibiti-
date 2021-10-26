<?php
  session_start();
  include_once("conecta.php");
  $nome_empresa = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
  $cnpj = filter_input(INPUT_POST,'cnpj',FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
  $senha_cripto = password_hash($senha,PASSWORD_DEFAULT);
  $conf_senha = filter_input(INPUT_POST,'conf_senha',FILTER_SANITIZE_STRING);
  $conf_senha_cripto = password_hash($conf_senha,PASSWORD_DEFAULT);
  // echo "nome : $nome_empresa <br>";
  //echo "cnpj= $cnpj <br>";
  // echo "email= $email<br>";
  //echo "senha = $senha<br>";
  //echo "conf senha = $conf_senha";

  $result_usuario = "INSERT INTO usuario (nome_emp,cnpj,email,senha,conf_senha,created) VALUES ('$nome_empresa','$cnpj','$email','$senha_cripto','$conf_senha_cripto',NOW())";
  $resultado_usuario = mysqli_query($conn,$result_usuario);

  if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: ../register.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: ../register.php");
  }
?>
