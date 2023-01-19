<?php
    session_start();
    ob_start();

    $id = filter_input(INPUT_GET, "matricula", FILTER_SANITIZE_NUMBER_INT);

    if (empty($id)) {
        $_SESSION['msg'] = "Erro: Usuário não encontrado!";
        header("Location: relalunos.php");
        exit();
    }



?>