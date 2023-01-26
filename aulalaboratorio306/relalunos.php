<?php

    require_once 'head.php';
    include_once 'conexao.php';

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 3;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT matricula,cpf, nome, telefone, email 
    FROM aluno WHERE status = 'A' LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();

    if (($resultado) AND ($resultado->rowCount() != 0)){
       
        echo "<h1>Relatório de Alunos</h1><br>";
?>
        <table class="table">
        <thead>
         <tr>
            <th scope="col">Matricula</th>
            <th scope="col">Cpf</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Função</th>
         </tr>
        </thead>
     <tbody>

<?php
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
           
            extract($linha);             
        
?>        
            <tr>
              <td scope="row"><?php echo $matricula ?></td>
              <td><?php echo $cpf ?></td>
              <td><?php echo $nome ?></td>
              <td><?php echo $telefone ?></td>
              <td><?php echo $email ?></td>
              <td>
                 <?php echo "<a href='editar.php?matricula=$matricula'>" ; ?>
                <input type="submit" class="btn btn-primary" name="editar" value="Editar">
              </td>
              <td>
                 <?php echo "<a href='excluir.php?matricula=$matricula'>" ; ?>
                 <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
              </td>
             </tr>           
<?php         
    } 
?>
</tbody>
</table>
<?php    
        
    }else{
        echo "Não tem registros";
    }




     //Contar os registros no banco
     $qtregistro = "SELECT COUNT(matricula) AS registros FROM aluno
     WHERE status = 'A'";
     $resultado = $conn->prepare($qtregistro);
     $resultado->execute();
     $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

     //Quantidade de página que serão usadas - quantidade de registros
     //dividido pela quantidade de registro por página
     $qnt_pagina = ceil($resposta['registros'] / $limitereg);

      // Maximo de links      
      $maximo = 2;

      echo "<a href='relalunos.php?page=1'>Primeira</a> ";
    // Chamar página anterior verificando a quantidade de páginas menos 1 e 
    // também verificando se já não é primeira página
    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
        if ($anterior >= 1) {
            echo "  <a href='relalunos.php?page=$anterior'>$anterior</a> ";
        }
    }

    //Mostrar a página ativa
    echo "$pag";

    //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
    // a ela
    for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='relalunos.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='relalunos.php?page=$qnt_pagina'>Última</a> ";


?>