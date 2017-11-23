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
        height: 60vh;
        background-image: url(image/pc/overwatch/o4.jpg);
        background-size: cover;
        background-position: 10% 30%;
        
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
        
        <div id="main" style="background-image: url(image/pc/overwatch/o2.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/pc/overwatch/o3.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/pc/overwatch/o1.jpg"/></div>
                <div><img class="dd" src="image/pc/overwatch/o2.jpg"/></div>
                <div><img class="dd" src="image/pc/overwatch/o3.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>OVERWATCH </td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>24<sup>th</sup>  May 2016</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>First-Person shooter</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>Blizzard Entertainment</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Blizzard Entertainment</td>
</tr>

<tr>
    <td>DESIGNER(S)</td>
    <td>Jeremy Craig<br>Michael Elliott
</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Mike Elliot<br>John LeFleur
</td>
</tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>9.4/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>9/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td> </td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                    Overwatch is a team-based multiplayer online first-person shooter video game developed and published by Blizzard Entertainment. 
					It was released in May 2016 for Windows, PlayStation 4, and Xbox One. Overwatch assigns players into two teams of six, with each 
					player selecting from a roster of pre-defined characters, known as heroes, each with a unique style of play, whose roles are divided
					into four general categories: Offense, Defense, Tank, and Support. Players on a team work together to secure and defend control points
					on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, 
					such as character skins and victory poses, as they play the game. The game was initially launched with casual play, with a competitive
					ranked mode, various 'arcade' game modes, and a player-customizable server browser subsequently included following its release. 
					Additionally, Blizzard has developed and added new characters, maps, and game modes post-release, while stating that all Overwatch updates
					will remain free, with the only additional cost to players being microtransactions to earn additional cosmetic rewards.
                </p>
                <p>
                  Overwatch is Blizzard's fourth major franchise and came about following the 2014 cancellation of the ambitious massively multiplayer online 
				  role-playing game Titan. A portion of the Titan team came up with the concept of Overwatch, based on the success of team-based first-person 
				  shooters like Team Fortress 2 and the growing popularity of multiplayer online battle arenas, creating a hero-based shooter that emphasized
				  teamwork. Some elements of Overwatch borrow assets and concepts from the canceled Titan project.  
                </p>
                <h2>Development</h2>
                <p>
                   Overwatch came about in the aftermath of Blizzard's decision to cancel the massively multiplayer online role-playing game Titan in 2013,
				   a project that had been in development for about seven years. While most others assigned to the project were transferred to other 
				   departments within Blizzard, a small team of about 40 people, led by director Jeff Kaplan, were tasked to come up with a new concept for a 
				   game in a few months. After some brainstorming, they came onto the idea of a hero team-based shooter, building upon the success of games
				   like Team Fortress 2 and multiplayer online battle arenas. They started with assets developed for Titan to demonstrate the proof-of-concept,
				   and were greenlit to build out the full game, the first new intellectual property that Blizzard had developed since StarCraft.
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/overwatch.MKV" controls></video>
                </div>            
            
            <h1>SHOP for OVERWATCH</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.in/s/?i=videogames&k=overwatch&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">SNAPDEAL</a></span>
                    </p>
                
                        <form action="overwatch.php" method="post">
                            <span>Rs 2,800</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.com/overwatch/p/itmeguvmhdwmfbsc">FLIPKART</a></span>
                    </p>
                
                        <form action="overwatch.php" method="post">
                            <span>Rs 3,100</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/s/?i=videogames&k=overwatch&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">AMAZON</a></span>
                    </p>
                
                        <form action="overwatch.php" method="post">
                            <span>Rs 2,990</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/pc/overwatch/o1.jpg","image/pc/overwatch/o3.jpg",
                                 "image/pc/overwatch/o2.jpg","image/pc/overwatch/o4.jpg"];
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
