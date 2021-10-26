<?php
  session_start();
  include_once("conecta.php");
  $duplicatas_a_receber= isset($_POST['duplicatas_a_receber']) ? $_POST['duplicatas_a_receber'] : '';
  $caixa = isset($_POST['caixa']) ? $_POST['caixa'] : '';
  $bancos= isset($_POST['bancos']) ? $_POST['bancos'] : '';
  $aplicacao_financeira_curto_prazo= isset($_POST['aplicacao_financeira_curto_prazo']) ? $_POST['aplicacao_financeira_curto_prazo'] : '';
  $ativo_circulante_operacional= isset($_POST['ativo_circulante_operacional']) ? $_POST['ativo_circulante_operacional'] : '';
  $ativo_circulante_financeiro= isset($_POST['ativo_circulante_financeiro']) ? $_POST['ativo_circulante_financeiro'] : '';
  $estoques= isset($_POST['estoques']) ? $_POST['estoques'] : '';
  $outros_ativos_de_curto_prazo= isset($_POST['outros_ativos_de_curto_prazo']) ? $_POST['outros_ativos_de_curto_prazo'] : '';
  $idemp = $_SESSION['id'];
  echo "vl:".$duplicatas_a_receber."<br>at:".$caixa."<br>ll:".$bancos."<br>olm:".$aplicacao_financeira_curto_prazo."<br>".$ativo_circulante_operacional."<br>".$ativo_circulante_financeiro."<br>".$estoques."<Br>".$outros_ativos_de_curto_prazo."<br>";
  // echo "nome : $nome_empresa <br>";
  //echo "cnpj= $cnpj <br>";
  // echo "email= $email<br>";
  //echo "senha = $senha<br>";
  //echo "conf senha = $conf_senha";
  $result_usuario = "INSERT INTO cad_geral (id_emp, duplicatas_a_receber, caixa, bancos, aplicacao_financeira_curto_prazo, ativo_circulante_operacional, ativo_circulante_financeiro, estoques, outros_ativos_de_curto_prazo, created)  VALUES ('$idemp', '$duplicatas_a_receber', '$caixa', '$bancos', '$aplicacao_financeira_curto_prazo', '$ativo_circulante_operacional', '$ativo_circulante_financeiro', '$estoques', '$outros_ativos_de_curto_prazo', NOW())";
  $resultado_usuario = mysqli_query($conn,$result_usuario);

  if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Dados de estrutura de capital inseridos com sucesso</p>";
    echo "runfou";
    //header("Location: ../estruturadecapital.php");
  }else{
    $_SESSION['msg'] = "<p style='color:red;'>Dados não inseridos</p>";
    echo "runfou n";
   // header("Location: ../estruturadecapital.php");
  }
?>
