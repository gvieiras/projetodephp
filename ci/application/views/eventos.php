<!DOCTYPE html>
<html lang="br">
    <head>
    <meta charset="UTF-8" />
    <title>Palco Caiçara - Eventos</title>   
    
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/default-style.css" />
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <style>
        #corpo{
            margin-top:25px;
        }
        
        
        form>img {
            width:100%;
        }
        
        form>p {
            width:90%;
            margin:0 auto;
        }
        
        [type="submit"] {
            background-color: transparent;
            border:0;
        }
        
        .artistaBotao {
            width:100%;
        }
        
        #paginasFundo > p {
             display: inline;
        }
        
        #paginasFundo {
            width:100%;
            margin-top:15%;
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
            <!--<div id="pesquisar-barra">
              <label for="pesquisa">Pesquisar por evento</label>
              <input type="text" id="pesquisa" placeholder="Digite o nome do evento" autofocus>
              <input type="submit" name="cmdSend" value="Pesquisar" id="btp"/>
            </div>-->

                <form action="cadastroevento" method="post">
                <input type="submit" value="ADICIONAR EVENTO"></input>
                </form>

                <div id="allFlyers">
                    <div class="flyer">
                    
                      
                      <form action="https://php-yolatengo.c9users.io/ci/editarevento" method="post">
                          <input type="hidden" id="cd_evento" name="cd_evento" value="<?= $evento[0]['cd_evento'];?>"/>
                          <img src="img/flyerPlaceholder.png" alt="flyer (placeholder)">
                          <input class="artistaBotao" type="submit" value="<?php echo $evento[0]['nm_evento'];?>"></input>
                          <p><?php echo $evento[0]['ds_bandas'];?></p>
                          <p>R$<?php echo $evento[0]['vl_evento'];?></p>
                          <p><?php echo $evento[0]['dt_evento'];?></p>
                      </form>
                    
                    </div>

                
                    <div class="flyer">
                      
                      <form action="https://php-yolatengo.c9users.io/ci/editarevento" method="post">
                          <input type="hidden" id="cd_evento" name="cd_evento" value="<?= $evento[1]['cd_evento'];?>"/>
                          <img src="img/flyerPlaceholder.png" alt="flyer (placeholder)">
                          <input class="artistaBotao" type="submit" value="<?php echo $evento[1]['nm_evento'];?>"></input>
                          <p><?php echo $evento[1]['ds_bandas'];?></p>
                          <p>R$<?php echo $evento[1]['vl_evento'];?></p>
                          <p><?php echo $evento[1]['dt_evento'];?></p>
                      </form>
                    </div>
                
                    <div class="flyer">
                      
                      <form action="https://php-yolatengo.c9users.io/ci/editarevento" method="post">
                          <input type="hidden" id="cd_evento" name="cd_evento" value="<?= $evento[2]['cd_evento'];?>"/>
                          <img src="img/flyerPlaceholder.png" alt="flyer (placeholder)">
                          <input class="artistaBotao" type="submit" value="<?php echo $evento[2]['nm_evento'];?>"></input>
                          <p><?php echo $evento[2]['ds_bandas'];?></p>
                          <p>R$<?php echo $evento[2]['vl_evento'];?></p>
                          <p><?php echo $evento[2]['dt_evento'];?></p>
                      </form>
                    </div>
                </div>

                <div id="paginasFundo">
                    <p>página</p>
                    <a href="#">[<<]</a> <a href="#">[<]</a> 
                    <a href="#">1</a> - <a href="#">2</a> - <a href="#">3</a> - <a href="#">4</a> - 
                    <a href="#">5</a> - <a href="#">6</a> - <a href="#">7</a> - <a href="#">8</a> - 
                    <a href="#">9</a> - <a href="#">10</a> <a href="#">[>]</a> <a href="#">[>>]</a>
                </div>
        <br>
        
        <footer>
            &copy; Palco Caiçara  |  Desenvolvido por Gabriel Vieira, Lucas Maurício, Nathália Fonseca
        </footer>
        </div>
        
    <script src="js/bootstrap.js"></script>  
    <script src="js/fonte.js"></script>
    </body>
</html>