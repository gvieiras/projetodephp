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
            <h1>Editar evento: <?=$evento[0]['nm_evento']?></h1>
            
            <form name="cadastro-evento" action="/ci/EventosCon/update_salvar" method="post">
                <input type="hidden" id="cd_evento" name="cd_evento" value="<?= $evento[0]['cd_evento'];?>"> 
                  <p>
                        <label for="nm_evento">Nome do evento:</label> 
                        <input type="text" id="nm_evento" name="nm_evento" value="<?=$evento[0]['nm_evento']?>" required autofocus/>
                  </p>
                  
                  <p>
                      <label for="dt_evento">Data do evento:</label> 
                      <input type="date" id="dt_evento" name="dt_evento" value="<?=$evento[0]['dt_evento']?>" required/>
                  </p>
                  
                  <p>
                        <label for="ds_bandas">Bandas que irão se apresentar (separe-as por vírgula):</label> 
                        <textarea rows="4" cols="50" name="ds_bandas" id="ds_bandas"><?=$evento[0]['ds_bandas']?></textarea>
                  </p>
                  
                 <p>
                      <label for="vl_evento">Valor do evento:</label> 
                      <input type="text" id="vl_evento" name="vl_evento" value="<?=$evento[0]['vl_evento']?>" required />
                  </p>
                  
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="enviar"/>
                  </p>
                  
            </form>
            <form name="cadastro-material" action="/ci/EventosCon/excluir" method="post">
                    <input type="hidden" id="cd_evento" name="cd_evento" value="<?=$evento[0]['cd_evento'];?>">
                  <p>
                        <input type="submit" id="botao_Enviar" name="cmdSend" value="excluir" onclick="return confirm('CONFIRMAR EXCLUSÃO DO EVENTO?');" style="background-color:red;color:white"/>
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