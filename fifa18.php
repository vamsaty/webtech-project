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
            
        

        <title> FIFA 18 </title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/ps/fifa/f3.jpg);
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
        
        <div id="main" style="background-image: url(image/ps/fifa/f4.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/ps/fifa/f1.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/ps/fifa/f3.jpg"/></div>
                <div><img class="dd" src="image/ps/fifa/f2.jpg"/></div>
                <div><img class="dd" src="image/ps/fifa/f1.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td> FIFA 18</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>29<sup>th</sup> September 2017</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>SPORTS</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player<br>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>EA Vancouver</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>EA Sports</td>
</tr>


   
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>8.1/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>7/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>FIFA 18 is a sports video game that simulates association football. The game features 52 fully licensed stadiums from 12 countries, 
		including new stadiums, plus 30 generic fields equals to a total of 82. All 20 Premier League stadiums are represented in the series. </td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                    FIFA 18 is a football simulation video game in the FIFA series of video games, developed and published by Electronic Arts and was 
					released worldwide on 29 September 2017 for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One and Nintendo Switch.
					It is the 25th instalment in the FIFA series. Real Madrid forward Cristiano Ronaldo appears as the cover athlete
                </p>
                <p>
                    FIFA 18 is the second instalment in the series to use the Frostbite 3 game engine, although some versions of the game use a different
					game engine. The PlayStation 4 and Xbox One versions include a continuation of "The Journey" a story-based mode that was originally in
					FIFA 17 entitled "The Journey: Hunter Returns". The PlayStation 3 and Xbox 360 versions, known as FIFA 18: Legacy Edition, do not contain
					any new gameplay features aside from updated kits and rosters.



Contents  [hide] 
                </p>
                <h2>Development</h2>
                <p>
                   FIFA 18 was developed and published by Electronic Arts. In January 2017, during the Nintendo Switch Presentation, EA announced a 
				   custom-built port of FIFA 18 on the Nintendo Switch console. It runs on an internally developed game engine, as opposed to Frostbite
				   engine that several versions of the game run on. While the Switch version includes a career mode, it excludes the story-based Journey mode.
				   The Switch version runs at a resolution of 1080p at 60 frames per second when docked to a TV, and 720p at 60 frames per second in the handhed/
				   tabletop mode. The Switch version marks the first time Ultimate Team ever made an appearance on a Nintendo system. Features exclusive to the 
				   Switch version include local multiplayer in the form of the new mode Local Seasons, allowing up to 2 Nintendo Switches to connect and compete 
				   in a five-match sequence. Another mode exclusive to Switch is the Switch Kick-Off mode, allowing players to instantly get into local/solo matches.
				   
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/fifa.MP4" controls></video>
                </div>            
            
            <h1>SHOP for FIFA 18</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.in/EA-Sports-FIFA-18-PS4/dp/B071ZZZ3K9">SNAPDEAL</a></span>
                    </p>
                
                        <form action="fifa18.php" method="post">
                            <span>Rs 3,199</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.in/EA-Sports-FIFA-18-PS4/dp/B071ZZZ3K9">FLIPKART</a></span>
                    </p>
                
                        <form action="fifa18.php" method="post">
                            <span>Rs 3,400</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/EA-Sports-FIFA-18-PS4/dp/B071ZZZ3K9">AMAZON</a></span>
                    </p>
                
                        <form action="fifa18.php" method="post">
                            <span>Rs 3,650</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/ps/fifa/f1.jpg","image/ps/fifa/f2.jpg","image/ps/fifa/f3.jpg"];
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
