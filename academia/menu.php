<?php

    if(!isset($_SESSION["quant"])){
      $_SESSION["quant"] = 0;
    }

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Academia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nossa Academia</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Atividades
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Spinning</a>
                <a class="dropdown-item" href="#">Jumpp</a>
                <a class="dropdown-item" href="#">Funcional</a>
                
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Loja
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="roupas.php">Roupas</a>
                <a class="dropdown-item" href="suplemento.php">Suplementos</a>
                <a class="dropdown-item" href="#">Acessórios</a>
                <a class="dropdown-item" href="mochilas.php">Mochilas</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desativado</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            
            <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                           Área do Cliente
            </button>

            <img src="imagens/carrinho.png" style=width:50px;height:50px;>
            <?php 
              if($_SESSION["quant"]>0){
                 echo $_SESSION["quant"]; 
              }
            ?>
         
          </form>
        </div>
    </nav>


    <!-- Modal -->

    
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center text-info" id="exampleModalLabel">Acesso ao Sistema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="login">
       
        <div class="container-fluid">
            <div id="login-row" class="row justify-content-center">
               
                   
                        <form id="login-form" class="form" action="" method="post">
                            
                            <div class="form-group">
                                <label for="username" class="text-info">Nome de Usuário:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastre-se">
                            </div>
                            
                        </form>
                   
               
            </div>
        </div>
    </div>
            
      </div>
     
    </div>
  </div>
</div>