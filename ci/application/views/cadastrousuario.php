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
        .row {
            width:100%;
        }    
        
        #plc {
            font-size:31px;
            color:#FF6600;
        }
        
        #seguraTudo > #caixaLogin > h1 { 
            margin:5px;
            margin-bottom:10px;
            position:absolute;
        }
        
        [value="entrar"] {
            background-color:black;
            color:#FF6600; 
        }
        
        #formulario-cadastrar > p {
            float:right;
            width:40%;
            font-size:18px;
            margin-right:10px;
            padding:0;
        }
    </style>
    </head>
    
    <body>
        <!--HEADER-->
        <header>
            <ul>
                <div class="row">
                    <div class="col-md-3">
                        <li><h1><a href="home.html">
                            <span class="glyphicon glyphicon-cd" aria-hidden="true"></span> palco <span id="text-caicara">caiçara</span></a>
                                              </h1>
                        </li>
                    </div>
                        
                    <div class="col-md-2">
                        <a href="https://php-yolatengo.c9users.io/ci/artistas"><li>artistas  <span class="glyphicon glyphicon-sunglasses"></span></li></a>
                    </div>
                        
                    <div class="col-md-2"> 
                        <a href="https://php-yolatengo.c9users.io/ci/eventos"><li>eventos  <span class="glyphicon glyphicon-calendar"></span></li></a>
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
            <div id="caixaLogin">
                    <h1>Já é um usuário? Logue-se!</h1><br>
                    
                    <form name="logar" action="/ci/dbnome/autentica" method="post">
                        <p>
                            <label for="nome-usuario">Nome do usuário:</label>
                                <input type="text" id="nome-usuario" name="nm_usuario" required/>
                        </p>
                        
                        <p>
                                <label for="senha">Senha:</label> 
                                <input type="password" id="senha" name="ds_senha" maxlength="12" required/>
                        </p>
                        <p>
                                <input type="submit" class="botao_Enviar" name="cmdSend" value="entrar"/>
                        </p>
                        
                    </form>

                </div>
            <main id="formulario-cadastrar">
                <p>No <span id="plc">palco caiçara</span> você pode catalogar seus artistas favoritos, avaliar materiais musicais, descobrir eventos e divulgar sua banda!</p>
                <div id="caixaCadastro">
                    <h1><span class="cadastro-h1">Novo usuário? Cadastre-se!</span></h1>
                    
                    
                    <form name="cadastro" action="/ci/dbnome/inserir" method="post">
                          <p>
                                <label for="nome-completo">Nome completo:</label> 
                                <input type="text" id="nome-completo" name="nm_completousuario" required autofocus/>
                          </p>
                                    
                          <p>
                                <label for="nome-usuario">Nome do usuário:</label> 
                                <input type="text" id="nome-usuario" name="nm_usuario" required/>
                          </p>
                          
                          <p>
                                <label for="email-usuario">E-mail:</label> 
                                <input type="email" id="email-usuario" name="ds_email" required/>
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
                                <input type="date" id="data" name="dt_nascimento" required/>
                          </p>
                    
                          <p>
                                <input type="submit" class="botao_Enviar" name="cmdSend" value="enviar" />
                          </p>
                    </form>
                        <form action="https://php-yolatengo.c9users.io/ci/editarusuario" method="post">
                                <input class="artistaBotao" type="submit" value="editar"></input>
                        </form>
                </div>
                
    
                
               
            </main>
                
            </div>
        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por Gabriel Vieira, Lucas Maurício, Nathália Fonseca
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>