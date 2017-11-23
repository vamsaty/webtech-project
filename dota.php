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
        background-image: url(image/pc/dota/d2.jpg);
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
        
        <div id="main" style="background-image: url(image/pc/dota/d2.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/pc/dota/d4.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/pc/dota/d1.jpg"/></div>
                <div><img class="dd" src="image/pc/dota/d3.jpg"/></div>
                <div><img class="dd" src="image/pc/dota/d4.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td> DOTA</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>9<sup>th</sup> July 2013</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>Battle Arena</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player<br>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>Valve Corporation</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Valve Corporation</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>Erik Johnson</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Ice Frog</td>
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
        <td>Two months before its official release, Dota 2 had reached almost 330,000 concurrent players, and held the record for the game with the most 
		concurrent users in Steam history, breaking its own record set in March of the same year.[200] Simultaneous with this benchmark, the concurrent 
		number of Dota 2 players in May 2013 outweighed the number of players for the rest of Steam's top ten most-played games combined.[201] Dota 2 was
		the first game in Steam's history to have over one million concurrent players, doing so in October 2015,[202][203] and was also the most played game
		on Steam by concurrent player count for four years, never dropping to second place for an extended period of time until being surpassed by 
		PlayerUnknown's Battlegrounds in 2017. Viewership and followings of professional Dota 2 leagues  </td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                    Dota 2 is a free-to-play multiplayer online battle arena (MOBA) video game developed and published by Valve Corporation. The game is
					the stand-alone sequel to Defense of the Ancients (DotA), which was a community-created mod for Blizzard Entertainment's Warcraft III:
					Reign of Chaos and its expansion pack, The Frozen Throne. Dota 2 is played in matches between two teams of five players, with each team
					occupying and defending their own separate base on the map. Each of the ten players independently controls a powerful character, known as
					a "hero", who all have unique abilities and differing styles of play. During a match, players collect experience points and items for 
					their heroes in order to successfully battle the opposing team's heroes, who are attempting to do the same to them. A team wins by being
					the first to destroy a large structure located in the opposing team's base, called the "Ancient".
                </p>
                <p>
                  Development of Dota 2 began in 2009 when IceFrog, the pseudonymous lead designer of the original Defense of the Ancients mod, was hired by
				  Valve to create a modernized sequel. Dota 2 was officially released on Steam for Microsoft Windows, OS X, and Linux-based personal computers
				  in July 2013, following a Windows-only public beta phase that began two years prior. Despite some criticism going towards its steep learning
				  curve and complexity, the game was praised for its rewarding gameplay, production quality, and faithfulness to its predecessor. The game 
				  initially used the original Source game engine until it was ported to Source 2 in 2015, making it the first game to use it. Since its release
				  , Dota 2 has been one of the most played games on Steam, with over a million concurrent .  
                </p>
                <h2>Development</h2>
                <p>
                   The Dota series began in 2003 with Defense of the Ancients (DotA)—a mod for Blizzard Entertainment's Warcraft III: Reign of Chaos—created by
				   the pseudonymous designer "Eul".An expansion pack for Warcraft III, entitled The Frozen Throne, was released later that year; a series 
				   of Defense of the Ancients clone mods for the new game competed for popularity. DotA: Allstars by Steve Feak was the most successful, and 
				   Feak, with his friend Steve Mescon, created the official Defense of the Ancients community website and the holding company DotA-Allstars, 
				   LLC. When Feak retired from DotA: Allstars in 2005, a friend, under the pseudonym "IceFrog", became its lead designer. By the late
				   2000s, Defense of the Ancients became one of the most popular mods in the world, as well as a prominent eSports title. IceFrog and Mescon
				   later had a falling out in May 2009, which prompted the former to establish a new community website at playdota.com.
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/dota2.MKV" controls></video>
                </div>            
            
            <h1>SHOP for DOTA</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.in/s/?ie=UTF8&keywords=dota&index=aps&ref=pd_sl_3wntdqhcyf_b&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">QUIKR</a></span>
                    </p>
                
                        <form action="dota.php" method="post">
                            <span>Rs 1,800</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.in/s/?ie=UTF8&keywords=dota&index=aps&ref=pd_sl_3wntdqhcyf_b&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">FLIPKART</a></span>
                    </p>
                
                        <form action="dota.php" method="post">
                            <span>Rs 1,759</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/s/?ie=UTF8&keywords=dota&index=aps&ref=pd_sl_3wntdqhcyf_b&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">AMAZON</a></span>
                    </p>
                
                        <form action="dota.php" method="post">
                            <span>Rs 1,999</span>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/pc/dota/d1.jpg","image/pc/dota/d3.jpg",
                                  "image/pc/dota/d2.jpg","image/pc/dota/d4.jpg"
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
