<?php
    require_once 'head.php';
?>

<form method="POST" action="controlecliente.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro do  cliente</h3>
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
                    <input type="text" name="telefone" class="form-control" onkeypress="$(this).mask('(00)00000-0000')">
                </div>
            </div>

            <div class="row">
           
            <div class="col-md-3">        
                <div class="form-group">            
                    <label for="cpf">Cpf</label>
                    <input type="text" name="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                </div>
            </div>


            <div class="col-md-2">        
              <div class="form-group">            
                  <label for="dn">Data de Nascimento</label>
                  <input type="date" class="form-control" name="dn">
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
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">numerocasa</label>
                    <input type="text" class="form-control" name="numerocasa">    
                </div>
            </div> 

            <div class="col-md-2">
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento">
                </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">                   
                </div>
            </div>


        </div>

        
        
        <div class="row">   

            <div class="col-md-5  ">
              <div class="form-group">
                 <label for="senha">Informe uma Senha</label><p>
                 <input type="text" class="form-control" name="senha">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label for="complemento">status</label>
                    <input type="text" class="form-control" name="status">
                </div>
            </div>
        </div>

            <div class="col-md-5  ">
              <div class="form-group">
                 <label for="foto">Foto</label><p>
                 <input type="file" class="form-control" name="foto">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                   
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btncad">
                </div>  
            </div>
        </div>
    </div>
  
</form>


<?php
    require_once 'footer.php';
?>