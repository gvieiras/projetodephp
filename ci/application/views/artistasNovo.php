<!DOCTYPE html>
<html lang="br">
    <head>
    <meta charset="UTF-8" />
    <title>Palco Caiçara - Artistas</title>   
    
    <!--styles-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/default-style.css" />
    
    <script src="js/jquery-3.1.1.min.js"></script>
    
    <style>
        [value="ADICIONAR ARTISTA"] {
            background-color:transparent;
            border:0
        }
        
        .col-md-2 > a > li { 
            margin: 0; 
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
        
        <!--<div id="controle-fonte"> Texto:
        <input type="button" class="button" value="-" id="Out" alt="Zoom Out"/>
        <input type="button" class="button" value="+" id="In" alt="Zoom In"/>
        </div>-->
        
        <br>
        
        <body>
        <div id="corpo">
            <div id="alfabeto">
                <a href="#">#</a> –
                <a href="#">A</a> – 
                <a href="#">B</a> – 
                <a href="#">C</a> – 
                <a href="#">D</a> – 
                <a href="#">E</a> – 
                <a href="#">F</a> – 
                <a href="#">G</a> – 
                <a href="#">H</a> – 
                <a href="#">I</a> – 
                <a href="#">J</a> – 
                <a href="#">K</a> – 
                <a href="#">L</a> – 
                <a href="#">M</a> – 
                <a href="#">N</a> – 
                <a href="#">O</a> – 
                <a href="#">P</a> – 
                <a href="#">Q</a> – 
                <a href="#">R</a> – 
                <a href="#">S</a> – 
                <a href="#">T</a> – 
                <a href="#">U</a> – 
                <a href="#">V</a> –
                <a href="#">W</a> – 
                <a href="#">X</a> – 
                <a href="#">Y</a> – 
                <a href="#">Z</a>
            </div>
        
            <table class="ultimosArtistas">
                
                <form action="cadastroartista" method="post">
                <input type="submit" value="ADICIONAR ARTISTA"></input>
                </form>
                
                
                <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[0]['cd_artista'];?>"
                    <tbody>
                        <tr class="eeeTr">
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            
                            <td>
                            <!--LISTAGEM DE NOME AQUI-->
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[0]['nm_artista'];?>" </input>
                            <!--LISTAGEM DE NOME AQUI-->
                                <p><?php echo $artista[0]['ds_genero'];?></p>
                                <p><?php echo $artista[0]['dt_formacao'];?></p>
                            </td>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[1]['cd_artista'];?>">
                        </tr>
                        
                        <tr>
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[1]['nm_artista'];?>" </input>
                                <p><?php echo $artista[1]['ds_genero'];?></p>
                                <p><?php echo $artista[1]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[2]['cd_artista'];?>">    
                        <tr class="eeeTr">
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[2]['nm_artista'];?>" </input>
                                <p><?php echo $artista[2]['ds_genero'];?></p>
                                <p><?php echo $artista[2]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[3]['cd_artista'];?>">    
                        <tr>
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[3]['nm_artista'];?>" </input>
                                <p><?php echo $artista[3]['ds_genero'];?></p>
                                <p><?php echo $artista[3]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[4]['cd_artista'];?>">
                        <tr class="eeeTr">
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[4]['nm_artista'];?>" </input>
                                <p><?php echo $artista[4]['ds_genero'];?></p>
                                <p><?php echo $artista[4]['dt_formacao'];?></p>
                                
                            </td>
                             
                        <tr>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[5]['cd_artista'];?>">
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[5]['nm_artista'];?>" </input>
                                <p><?php echo $artista[5]['ds_genero'];?></p>
                                <p><?php echo $artista[5]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                         
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[6]['cd_artista'];?>">     
                        <tr class="eeeTr">
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[6]['nm_artista'];?>" </input>
                                <p><?php echo $artista[6]['ds_genero'];?></p>
                                <p><?php echo $artista[6]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[7]['cd_artista'];?>">     
                        <tr>
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[7]['nm_artista'];?>" </input>
                                <p><?php echo $artista[7]['ds_genero'];?></p>
                                <p><?php echo $artista[7]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[8]['cd_artista'];?>">     
                        <tr class="eeeTr">
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[8]['nm_artista'];?>" </input>
                                <p><?php echo $artista[8]['ds_genero'];?></p>
                                <p><?php echo $artista[8]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                    
                    
                    <form action="https://php-yolatengo.c9users.io/ci/paginaArtista" method="post">
                    <input type="hidden" id="cd_artista" name="cd_artista" value="<?= $artista[9]['cd_artista'];?>">     
                        <tr>
                            
                            <td>
                                <span class="glyphicon glyphicon-picture" aria-hidden="true">
                            </td>
                            
                            <td>
                                <input class="artistaBotao" type="submit" value="<?php echo $artista[9]['nm_artista'];?>" </input>
                                <p><?php echo $artista[9]['ds_genero'];?></p>
                                <p><?php echo $artista[9]['dt_formacao'];?></p>
                                
                            </td>
                            
                        </tr>
                    </form>
                            
                        </tr>
                    </tbody>
            </table>

            <div id="paginasFundo">
                página
                <a href=#>[<<]</a>
                <a href=#>[<]</a>
                <a href=#>1</a> -
                <a href=#>2</a> - 
                <a href=#>3</a> - 
                <a href=#>4</a> - 
                <a href=#>5</a> - 
                <a href=#>6</a> - 
                <a href=#>7</a> -
                <a href=#>8</a> -
                <a href=#>9</a> -
                <a href=#>10</a> -
                <a href=#>[>]</a>
                <a href=#>[>>]</a> 
            </div>
            
            
            <script src="js/bootstrap.js"></script>  
            <script src="js/fonte.js"></script>
        </div>
        
            <footer>
                &copy; Palco Caiçara  |  Desenvolvido por Gabriel Vieira, Lucas Maurício, Nathália Fonseca
            </footer>
    </body>
</html>