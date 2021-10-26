<?php
    session_start();
    session_destroy();

    unset(
        $_SESSION['id'],   
        $_SESSION['nome_emp'],
        $_SESSION['email'],
        $_SESSION['senha'] 
    );
    echo "Logado com sucesso";
    header("refresh: 2;../index.php");

?>