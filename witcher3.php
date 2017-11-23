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
        background-image: url(image/ps/witcher/w3.jpg);
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
        
        <div id="main" style="background-image: url(image/ps/witcher/w2.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/ps/witcher/w1.png" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/ps/witcher/w1.jpg"/></div>
                <div><img class="dd" src="image/ps/witcher/w3.jpg"/></div>
                <div><img class="dd" src="image/ps/witcher/w2.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td> WITCHER 3</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>19<sup>th</sup> May 2015</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>ACTION<br>ROLE PLAYING</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>CD PROJEKT RED</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>CD PROJEKT</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>Piotr Krzywonosiuk<br>Jędrzej Mróz</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Grzegorz Mocarski</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Marcin Blacha</td>
</tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>9.3/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>10/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>The in-game world of The Witcher: Wild Hunt has been officially described as being 30 times larger than the last two games. Geralt will have
		to make his way throughout the world by utilizing his own horse and a sailboat to discover far-off locations. Fast traveling has been included, 
		so adventurers will have an easier time venturing to past villages and forts.  </td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                    The Witcher 3: Wild Hunt is a 2015 action role-playing video game developed and published by CD Projekt. Based on The Witcher series 
					of fantasy novels by Polish author Andrzej Sapkowski, it is the sequel to the 2011 video game The Witcher 2: Assassins of Kings and the 
					third installment in The Witcher video-game series. Played in an open world with a third-person perspective, players control protagonist
					Geralt of Rivia. Geralt, a monster hunter known as a Witcher, is looking for his missing adopted daughter, who is on the run from the Wild
					Hunt: an otherworldly force determined to capture and use her powers. Players battle the game's many dangers with weapons and magic, 
					interact with non-player characters, and complete main-story and side quests to acquire experience points and gold, which are used to 
					increase Geralt's abilities and purchase equipment. Its central story has several endings, determined by the player's choices at certain 
					points in the game.
                </p>
                <p>
                    Development began in 2011 and lasted for three-and-a-half years, of which over two-and-a-half years were devoted to voice recording. 
					The writing was infused with real-life aspects in a deliberate attempt to avoid simplification, impart authenticity, and reflect 
					Sapkowski's novels. Europe was the basis of the game's open world, with Poland, Amsterdam, and Scandinavia its primary inspirations. 
					REDengine 3 enabled the developer to create a complex story without compromising the game world, whose size was enlarged by PlayStation 
					4 and Xbox One technology. The music was primarily composed by Marcin Przybyłowicz and performed in Germany by the Brandenburg State 
					Orchestra.
                </p>
                <h2>Development</h2>
                <p>
                    Although the game was planned to begin production in 2008, CD Projekt RED's preoccupation with Rise of the White Wolf pushed it back to 
					2011. The company developed The Witcher 3: Wild Hunt with a self-funded budget of US$81 million over three-and-a-half years. The 
					project began with 150 employees, eventually growing to over 250 in-house staff. Fifteen hundred people were involved in the game's 
					production globally. While the game is based on Sapkowski's novels, his involvement with the game was limited to the creation of its 
					in-game map. It was localised in 15 languages, with a total of 500 voice actors. The game was scripted concurrently in Polish and English
					to alleviate difficulty in localisation. According to Side (the company which handled voice casting and recording, the 450,000-word script
					had 950 speaking roles. The voices were recorded from late 2012 to early 2015. CD Projekt RED wanted The Witcher 3: Wild Hunt to be free 
					of any digital rights management due to the developer's unsuccessful control of piracy with its predecessor, The Witcher 2: Assassins of 
					Kings, whose DRM made the latter run slowly.[44]
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/witcher.MKV" controls></video>
                </div>            
            
            <h1>SHOP for WITCHER 3</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.com/product/the-witcher-3-wild-hunt/649363243756">SNAPDEAL</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 1,450</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.com/witcher-3-wild-hunt/p/itme56f83gahfnpz">FLIPKART</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 1,499</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/s/?i=videogames&k=the+witcher+3+amazon&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">AMAZON</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 1,599</span>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/ps/witcher/w1.png","image/ps/witcher/w3.jpg",
                                  "image/ps/witcher/w2.jpg",
                                  "image/ps/witcher/w1.jpg"];
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
