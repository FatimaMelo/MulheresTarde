<?php
   
    require_once 'head.php';
    include_once 'conexao.php';

    $pagatual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
	$pag = (!empty($pagatual)) ? $pagatual : 1;

    $limitereg = 6;

    $inicio = ($limitereg * $pag) - $limitereg;

    $busca= "SELECT p.codigoproduto,p.nome,p.valor,p.foto
    FROM produto p,categoria c WHERE 
    c.idcategoria = p.idcategoria and
    c.nomecategoria = 'suplemento' and
    p.quantidade > 0 LIMIT $inicio , $limitereg";

    $resultado = $conn->prepare($busca);
    $resultado->execute();  
       
       
?>

<div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-12 text-center">
            <h2>Suplementos e vitaminas</h2>
         </div>

        <?php
        if (($resultado) AND ($resultado->rowCount() != 0)){
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
           
            extract($linha);             
        
        ?>    
            <div class="col-md-3">
                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="<?php echo $foto; ?>">
                    <div class="card-body text-center">
                        <h3 class="card-text"><?php echo $nome; ?></h3>
                        <h4>Preço R$ <?php echo $valor; ?>,00</h4>
                        <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary">
                            Comprar
                            </button>
                    </div>
                </div> 
            </div>
        
    <?php         
    } 
}
?>

</div>
</div>

<?php
     //Contar os registros no banco
     $qtregistro = "SELECT COUNT(codigoproduto) AS registros FROM produto";
     $resultado = $conn->prepare($qtregistro);
     $resultado->execute();
     $resposta = $resultado->fetch(PDO::FETCH_ASSOC);

     //Quantidade de página que serão usadas - quantidade de registros
     //dividido pela quantidade de registro por página
     $qnt_pagina = ceil($resposta['registros'] / $limitereg);

      // Maximo de links      
      $maximo = 2;

      echo "<a href='relprodutos.php?page=1'>Primeira</a> ";
    // Chamar página anterior verificando a quantidade de páginas menos 1 e 
    // também verificando se já não é primeira página
    for ($anterior = $pag - $maximo; $anterior <= $pag - 1; $anterior++) {
        if ($anterior >= 1) {
            echo "  <a href='relprodutos.php?page=$anterior'>$anterior</a> ";
        }
    }

    //Mostrar a página ativa
    echo "$pag";

    //Chamar próxima página, ou seja, verificando a página ativa e acrescentando 1
    // a ela
    for ($proxima = $pag + 1; $proxima <= $pag + $maximo; $proxima++) {
        if ($proxima <= $qnt_pagina) {
            echo "<a href='relprodutos.php?page=$proxima'>$proxima</a> ";
        }
    }

    echo "<a href='relprodutos.php?page=$qnt_pagina'>Última</a> ";


?>