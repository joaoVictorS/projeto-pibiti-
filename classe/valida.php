<?php
session_start();
include_once("conecta.php");
$btn_login = filter_input(INPUT_POST,'btn_login',FILTER_SANITIZE_STRING);
if($btn_login){
    $usuario = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
    //echo "$usuario - $senha";
    if((!empty($usuario)) AND (!empty($senha))){
        //gerar senha criptografada
       password_hash($senha,PASSWORD_DEFAULT);
        //pesquisar o usuario no banco de dados
        $result_usuario = "SELECT id,nome_emp,email,senha FROM usuario WHERE email='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conn,$result_usuario);
        if($resultado_usuario){
                $row_usuario = mysqli_fetch_assoc($resultado_usuario);
                if(password_verify($senha, $row_usuario['senha'])){
                    echo "Logado com sucesso";
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['nome_emp'] = $row_usuario['nome_emp'];
                    $_SESSION['email'] = $row_usuario['email'];
                    $_SESSION['senha'] = $row_usuario['senha'];
                    header("refresh: 2;../logado.php");
                }else{
                    echo "Login ou senha incorretos";
                    header("refresh: 2;../index.php");
                }
        }

    }else{
        $_SECTION['msg'] = "Login ou senha incorretos";
        echo "Login ou senha incorretos";
        header("refresh: 2;../index.php");
    }
}else{
    $_SECTION['msg'] = "pagina nao encontrada";
    echo "Pagina nao encontrada";
    header("refresh: 2;../index.php");
}

?>