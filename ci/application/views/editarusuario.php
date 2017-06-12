<!DOCTYPE html>
<html lang="br">
    <head>
    <meta charset="UTF-8" />
    <title>Palco Caiçara - Cadastro de usuário</title>   
    
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/default-style.css" />
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <style>
    .row{
        width:100%;
    }    
    </style>
    </head>
    
    <body>
        <!--HEADER-->
        <header>
            <ul>
                <div class="row">
                    <div class="col-md-3">
                        <li id="palcocaicara"><h1><a href="home.html">
                            <span class="glyphicon glyphicon-cd" aria-hidden="true"></span> palco <span id="text-caicara">caiçara</span></a>
                                              </h1>
                        </li>
                    </div>
                        
                    <!--                            tirar css inline dps                                --> 
                    <!--                            tirar css inline dps                                --> 
                    <!--                            tirar css inline dps                                --> 
                    <div class="col-md-2" style="text-align:right">
                        <a href="https://php-yolatengo.c9users.io/ci/artistas"><li style="margin:0">artistas  <span class="glyphicon glyphicon-sunglasses"></span></li></a>
                    </div>
                        
                    <div class="col-md-2" style="text-align:center"> 
                        <a href="https://php-yolatengo.c9users.io/ci/eventos"><li style="margin:0">eventos  <span class="glyphicon glyphicon-calendar"></span></li></a>
                    </div>
                    
                    <div class="col-md-2">
                        <a href="https://php-yolatengo.c9users.io/ci/cadastrousuario"><li>[cadastro / login] <span class="glyphicon glyphicon-user"></span></span></li></a>
                    </div>
                </div>
            </ul>
        </header>

        <div id="corpo">
            
        <!--ULTIMOS ARTISTAS SELECIONADOS-->
        <div id="seguraTudo">
            <main id="formulario-cadastrar">
                <div id="caixaCadastro">
                    <h1><span class="cadastro-h1">Edição de usuário: <?=$usuario[0]['nm_usuario']?></span></h1>
                    
                    
                    <form name="cadastro" action="/ci/Dbnome/update_salvar" method="post">
                        <input type="hidden" id="cd_usuario" name="cd_usuario" value="<?= $usuario[0]['cd_usuario'];?>"> 
                          <p>
                                <label for="nome-completo">Nome completo:</label> 
                                <input type="text" id="nome-completo" name="nm_completousuario" value="<?=$usuario[0]['nm_completousuario']?>" required autofocus/>
                          </p>
                                    
                          <p>
                                <label for="nome-usuario">Nome do usuário:</label> 
                                <input type="text" id="nome-usuario" name="nm_usuario" value="<?=$usuario[0]['nm_usuario']?>" required/>
                          </p>
                          
                          <p>
                                <label for="email-usuario">E-mail:</label> 
                                <input type="email" id="email-usuario" name="ds_email" value="<?=$usuario[0]['ds_email']?>" required/>
                          </p>
                                    
                          <p>
                                <label for="senha">Senha:</label> 
                                <input type="password" id="senha" name="ds_senha" maxlength="12" required/>
                          </p>
                                   
                          <p>
                                <fieldset>
                                <legend>Sexo:</legend>
                                      <label for="masculino">Masculino</label>
                                      <input type="radio" value="M" name="ic_sexo" required>
                                      
                                      <label for="feminino">Feminino</label>
                                      <input type="radio" value="F" name="ic_sexo" required>
                                      
                                </fieldset>
                          </p>
                                    
                          <p>
                                <label for="data">Data de nascimento:</label>
                                <input type="date" id="data" name="dt_nascimento" value="<?=$usuario[0]['dt_nascimento']?>" required/>
                          </p>
                    
                          <p>
                                <input type="submit" class="botao_Enviar" name="cmdSend" value="enviar" />
                          </p>
                    </form>
                </div>
                
    
                
               
            </main>
                
            </div>
        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por blablabla
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>