<!DOCTYPE html>
<?php

require 'core.php';
require 'connect.inc.php';



?>
<html>
    
    <link rel="stylesheet" href="xyz/content.css" />
    <link rel="stylesheet" href="xyz/img.css" />
    <link rel="stylesheet" href="page_layout.css" />
    <script src="xyz/jquery-3.2.1.min.js" type="text/javascript" ></script>

    <head>
            
        

        <title>  </title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 68vh;
        background-image: url(image/ps/spider/s1.jpg);
        background-size: cover;
        background-position: 20% 50%;
    }
    body{
        background-image: linear-gradient(0deg,rgba(0,0,0,0.4),rgba(0,0,0,0.9));
        height: 100%;
    }
                
            </style>
            
              
            
        <header>
        
        </header>
            <div id="anim" >
                <a href="demo.php"><div>HOME</div></a>
                <a href="genere.php"><div>GENERE</div></a>
                <a href="about_us.php"><div>ABOUT US</div></a>
                <a><div>CONTACT US</div></a>
                <a
                    <?php
                        
                        if(loggedin()){
                            echo 'href="logout.php"'
                   ?>
                   ><div>LOGOUT</div>
                <?php
                        }else{
                            echo 'href="login.php"';
                            ?>
                    ><div>LOGIN</div>
                    <?php
                    
                        }
                    ?>
                </a>                   
            </div>
        
        <div id="main" style="background-image: url(image/ps/spider/s1.png);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/ps/spider/s1.png" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/ps/spider/s1.jpg"/></div>
                <div><img class="dd" src="image/ps/spider/s2.jng"/></div>
                <div><img class="dd" src="image/ps/spider/s4.jpg"/></div>
                
                
</div>
              
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td> SPIDERMAN</td>
</tr>
<tr>
    <td>RELEASE DATE</td>
    <td>2018</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>ACTION<br>ADVENTURE</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>INSOMNIAC GAMES</td>
</tr>
<tr>
    <td>DIRECTOR(s)</td>
    <td> 	Bryan Intihar<br>
Ryan Smith</td>
</tr>
<tr>
    <td>Artist(s)</td> 
    <td>Jacinda Chew</td>
</tr>
<tr>
    <td>WRITER(S)</td>
    <td>Jon Paquette</td>
</tr>
    
</table>    
    
    
<div id="content_reviews">

    
    <table class="facts">

   
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
             Spider-Man is an upcoming action-adventure video game based on the Marvel Comics superhero Spider-Man. It is being developed by Insomniac Games and to be published by Sony Interactive Entertainment for PlayStation 4. It will be the first licensed game developed by Insomniac. The game will tell a new story about Spider-Man and is not tied to a film, comic book or video game. It will cover both the Peter Parker and Spider-Man aspects of the character and will feature an older and more experienced Spider-Man
                
                </p>
                <h2>Development</h2>
                <p>
                  In 2014, Marvel Games approached Sony Interactive Entertainment (SIE) wanting them to publish a Marvel game and to treat the game like a first party SIE title.[7] The game will be the first licensed game developed by Insomniac Games after 22 years of developing intellectual properties they have created, such as Spyro, Ratchet & Clank and Resistance. Bryan Intihar, the producer of Sunset Overdrive and former community manager of Insomniac Games, is the creative director of the project and Ryan Smith is the game director. It is Intihar's first time working in that role on a game. The community manager of Insomniac Games confirmed that they are using Sunset Overdrive's modified game engine. The game features the largest production team ever for an Insomniac game. The game was announced during Sony's E3 2016 press conference on June 13. It will be the first in a series of games made by Insomniac and Sony and marks the start of Marvel Games' new strategy to work with the "best game companies" who are passionate about their characters.
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/spider.MP4" controls></video>
                </div>            
            
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/ps/spider/s1.png","image/ps/spider/s2.jpg",
                                  "image/ps/spider/s4.jpg","image/ps/spider/s4.jpg"
                                 ];
                    var shops = document.querySelectorAll(".shop_pic");
                    for(var i=0;i<shops.length;i++){
                        shops[i].setAttribute("src",images[i]);
                    }
                    
                    
                $(".dd").click(function(){
                    var dd = $(this).attr("src");
                    //alert(dd); 
                    $(".game_pic").attr("src",dd);
                    
                });
                </script>
    
    
    </body>
    
</html>
