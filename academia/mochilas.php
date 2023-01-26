<?php
  require 'head.php';
  require 'menu.php';
?>  

    <div class="container-fluid conteudo">
        <div class="row">
            <div class="col-md-12 text-center">
               <h1>Coleção 2023</h1>
            </div>

        </div>
    </div>

   
    <div class="container-fluid imagens">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/mochila1.jpg">
                    <div class="card-body">
                        <h3 class="card-text">Mochila Paloma</h3>
                        <h4>R$ 150,00</h4>
                        <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paloma">
                            Comprar
                            </button>
                    </div>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/mochila2.jpg">
                    <div class="card-body">
                    <h3 class="card-text">Mochila Raissa</h3>
                        <h4>R$ 120,00</h4>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#raissa">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/mochila3.jpg">
                    <div class="card-body">
                    <h3 class="card-text">Mochila Mayra</h3>
                        <h4>R$ 110,00</h4>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mayra">
                            Comprar
                            </button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="imagens/mochila4.jpg">
                    <div class="card-body">
                    <h3 class="card-text">Mochila Academia</h3>
                        <h4>R$ 80,00</h4>
                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#academia">
                            Comprar
                            </button>
                    </div>
                </div>

        </div>
    </div>

   
    

<!-- Modal -->
<div class="modal fade" id="paloma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Paloma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/mochila1.jpg">
            <p>Mochila em couro legitimo, com costuras reforçadas e alças anatômicas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="raissa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Paloma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/mochila1.jpg">
            <p>Mochila em couro legitimo, com costuras reforçadas e alças anatômicas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="academia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Paloma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/mochila1.jpg">
            <p>Mochila em couro legitimo, com costuras reforçadas e alças anatômicas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="mayra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mochila Paloma</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
            <img class="img-fluid" src="imagens/mochila1.jpg">
            <p>Mochila em couro legitimo, com costuras reforçadas e alças anatômicas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
</div>




    <?php
        require_once 'footer.php';

    ?>
 





   