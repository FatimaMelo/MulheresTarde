<?php
  require_once 'head.php';

    session_start();
    ob_start();
  

?>  

<h1 class="text-center">Área do Aluno</h1>

<?php
    echo "Bem vindo(a)" . $_SESSION['nome'];

    if(!isset($_SESSION['nome'])){
        $_SESSION['msg'] = "Erro: Necessário realizar o login para acessar a página!";
        header("Location: login.php");
    }
?>

<a href="sair.php"><button type="submit">Sair</button>