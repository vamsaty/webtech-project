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
            
        

        <title>Watch Dogs 2</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 80vh;
        background-image: url(image/pc/watchdogs/w2.jpg);
        background-size: cover;
        
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
        
        <div id="main" style="background-image: url(image/pc/watchdogs/w33.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/pc/watchdogs/w1.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/pc/watchdogs/w33.jpg"/></div>
                <div><img class="dd" src="image/pc/watchdogs/w2.jpg"/></div>
                <div><img class="dd" src="image/pc/watchdogs/w1.jpg"/></div>
                
                
</div>
                
                       
                <script>
                    var img = ["image/pc/watchdogs/w2.jpg","image/pc/watchdogs/w33.jpg",
                               "image/pc/watchdogs/w1.jpg",
                               "image/pc/watchdogs/w2.jpg",];
                    var dd = document.querySelectorAll(".dd");
                    for(var i=0;i<dd.length;i++){
                        dd[i].setAttribute("src",img[i]);
                        //dd[i].style.boxShadow="0px 0px 120px red";
                    }
                    
                </script>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>WATCH DOGS 2</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/watch dogs 2</td>
    <td>15<sup>th</sup>  November 2016</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>ACTION<br>ADVENTURE</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player<br>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>Ubisoft Montreal</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Ubisoft</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>Dominic Guay</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Falko Poiker</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Patrice Zink<br>Jean-François Roy</td>
</tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>8.5/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>7.5/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>Pre-ordering The Gold Edition Collector's Edition included additional content such as weapon skins, vehicles and drones; the Deluxe Collector's
		Edition contains the same, but excluded the season pass. Each of these, as well as the generic Collector's Edition, contained a physical robot called 
		"Wrench Junior", which is controlled by using a mobile app on a smartphone or tablet computer. The Gold Edition came with the aforementioned items and 
		season pass, and although the Deluxe Edition omitted the inclusion of the season pass, it comprised all other additions.</td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                <p>   
					Watch Dogs 2 (stylized as WATCH_DOGS 2) is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft.
					It is the sequel to 2014's Watch Dogs and was released worldwide for PlayStation 4, Xbox One and Microsoft Windows in November 2016.
                    Set within a fictionalized version of the San Francisco Bay Area, the game is played from a third-person perspective and its open world
					is navigated on-foot or by vehicle. Players control Marcus Holloway, a hacker who works with the hacking group DedSec to take down the 
					city's advanced surveillance system known as ctOS. There are multiple ways to complete missions, and each successful assignment increases
					the follower count of DedSec. Cooperative multiplayer allows for competitive one-on-one combat and connecting with other players in order
					to neutralize a player who is causing havoc.

                </p>
                <p>
                    Ubisoft Montreal, the game's developer, studied player feedback from the first game to assess what could be improved in Watch Dogs 2 and
					the setting was researched by making frequent trips to California. Ubisoft Reflections was responsible for overhauling the driving
					mechanic.Real hackers were consulted to validate scripts and game mechanics for authenticity and references to real life hacktivism were
					fictionalized,like the Project Chanology protest. The original soundtrack for Watch Dogs 2 was composed by Hudson Mohawke.

                </p>
                <h2>Development</h2>
                <p>
                   Ubisoft Montreal made frequent scouting trips to California to research the setting, and attempted to put most of the local landmarks in
				   that region in the game. For regions that they could not put in the game, the team redesigned these locations and put them back into the
				   game. According to producer Dominic Guay, having realistic and accurate locations featured in the game was essential for the game as they
				   encourage players to explore the open world. Unlike many of Ubisoft's previous open world games, players do not need to climb towers in 
				   order to discover locations and missions. Instead, the game is opened up from the start, allowing players to explore the city freely.
				   The game's new progression system, which tasks players to gain followers instead of completing main missions, was another way Ubisoft
				   Montreal hoped to encourage exploration and make the city feel more "free".[30][31] Watch Dogs 2 had around sixty programmers devoted to 
				   its development.
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/watchdogs2.MKV" controls></video>
                </div>            
            
            <h1>SHOP for Watch Dogs 2</h1>
                <div class="shop_this">
                    <?php
                        
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.com/product/watch-dogs-pc/1464133">SNAPDEAL</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 1499</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.com/watch-dogs-2/p/itmejj4kpqdxuugx">FLIPKART</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 1,799</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/s/?i=aps&k=watch+dog+2&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">AMAZON</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 2,250</span>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/pc/watchdogs/w2.jpg","image/pc/watchdogs/w1.jpg",
                                  "image/pc/watchdogs/w4    .jpg"]
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
