<!DOCTYPE html>
<html lang="br">
    <head>
    <meta charset="UTF-8" />
    <title>Palco Caiçara - Home</title>   
    
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/default-style.css" />
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <style>
    .row{
        width:100%;
    }    
    
    .cadastro-material{
    width:50%;
    background-color:white;
    float:left;
    margin-left:25%;
    margin-bottom:25%;
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
                        </h1></li>
                </div>
                    
                <!--tirar css inline dps-->    
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
            
        <div class="cadastro-material">
            <h1>Cadastrar Evento</h1>
            
            <form name="cadastro-evento" action="/ci/EventosCon/inserir" method="post">
                  <p>
                        <label for="nm_evento">Nome do evento:</label> 
                        <input type="text" id="nm_evento" name="nm_evento" required autofocus/>
                  </p>
                  
                  <p>
                      <label for="dt_evento">Data do evento:</label> 
                      <input type="date" id="dt_evento" name="dt_evento" required/>
                  </p>
                  
                 
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar"/>
                  </p>
                 
                  
            </form>
        </div>
    
        </div>
        <footer>
            &copy;Palco Caiçara  |  Desenvolvido por blablabla
        </footer>
        
    <script src="js/bootstrap.js"></script>  
    </body>
</html>