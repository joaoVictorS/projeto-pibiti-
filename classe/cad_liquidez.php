<?php
  session_start();
  include_once("conecta.php");
  $ct= isset($_POST['ct']) ? $_POST['ct'] : '';
  $ac_rlp = isset($_POST['ac_rlp']) ? $_POST['ac_rlp'] : '';
  $pc= isset($_POST['pc']) ? $_POST['pc'] : '';
  $ac= isset($_POST['ac']) ? $_POST['ac'] : '';
  $disponivel = isset($_POST['disponivel']) ? $_POST['disponivel'] : '';
  $ativos = isset($_POST['ativos']) ? $_POST['ativos'] : '';
  $liquidezgeral = $ac_rlp/($ct*100);
  $liquidezcorrente = $ac/($pc*100);
  $liquidezimediata = $disponivel/($pc*100);
  $liquidezseca = $ativos/($pc*100);
  $idemp = $_SESSION['id'];
  echo "ct:".$ct."<br>ac_rlp:".$ac_rlp."<br>pc:".$pc."<br>ac:".$ac."<br>disponivel:".$disponivel."<br>ativos:".$ativos."<br>".$liquidezgeral."<br>".$liquidezcorrente."<br>".$liquidezimediata."<Br>".$liquidezseca."<br>";
  // echo "nome : $nome_empresa <br>";
  //echo "cnpj= $cnpj <br>";
  // echo "email= $email<br>";
  //echo "senha = $senha<br>";
  //echo "conf senha = $conf_senha";
  $result_usuario = "INSERT INTO liquidez (id_emp,ct,ac_rlp,pc,ac,disponivel,ativos,liquidezgeral,liquidezcorrente,liquidezimediata,liquidezseca,created) VALUES ('$idemp','$ct','$ac_rlp','$pc','$ac','$disponivel','$ativos','$liquidezgeral','$liquidezcorrente','$liquidezimediata','$liquidezseca',NOW())";
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
