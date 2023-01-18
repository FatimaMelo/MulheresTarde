<?php

    include_once 'conexao.php';


    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT cpf, nome, telefone, email 
    FROM aluno LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
        echo "<h1>Relatório de Alunos</h1><br>";

        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
           
            extract($linha);

           
            echo "<br> Cpf = " . $nome . "<br>";
            echo "Nome = " . $nome . "<br>";
            echo "Telefone = " . $telefone . "<br>";
            echo "Email = " . $email . "<br>";
        }
        
    }else{
        echo "Não tem registros";
    }

?>