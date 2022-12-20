<?php
    require_once 'head.php';
?>

<form>
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro de Aluno</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome">    
                </div>
            </div>           

            <div class="col-md-2">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
                </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                 <label for="sexo">Sexo</label>
                 <p><input type="radio" name="optradio" checked> Feminino           
                  <input type="radio" name="optradio"> Masculino
                </div>
            </div>

            <div class="col-md-2">        
              <div class="form-group">            
                  <label for="dn">Data de Nascimento</label>
                  <input type="date" class="form-control">
              </div>
           </div>
        </div>
        
        <div class="row">
           
            <div class="col-md-3">        
                <div class="form-group">            
                    <label for="cpf">Cpf</label>
                    <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">                   
                </div>
            </div>


        </div>

        <div class="row">
            
            <div class="col-md-2">            
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" class="form-control" id="cep" onblur="pesquisacep(this.value);">                    
                </div>
            </div>

            <div class="col-md-6">            
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control">    
                </div>
            </div> 
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">     

            <div class="col-md-5">
              <div class="form-group">
                 <label for="bairro">Bairro</label><p>
                 <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                 <label for="cidade">Cidade</label><p>
                 <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
            </div>

            <div class="col-md-2  ">
              <div class="form-group">
                 <label for="uf">Estado</label><p>
                 <input type="text" class="form-control" id="uf" name="uf">
                </div>
            </div>
        </div>
        
        <div class="row">    
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>
               
            </div>
        </div>
    </div>
  
</form>


<?php
    require_once 'rodape.php';
?>