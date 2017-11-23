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
            
        

        <title>FAR CRY PRIMAL</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/ps/far/f1.jpg);
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
        
        <div id="main" style="background-image: url(image/ps/far/f1.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/ps/far/f2.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/ps/far/f4.jpg"/></div>
                <div><img class="dd" src="image/ps/far/f2.jpg"/></div>
                <div><img class="dd" src="image/ps/far/f1.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>FAR CRY</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/Call of duty ww2</td>
    <td>3<sup>th</sup> november 2017</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>FIRST PERSON SHOOTER</td>
</tr>

<tr>
    <td>DEVELOPER(S)</td>
    <td>Sledgehammer Games</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Ubisoft</td>
</tr>
    <tr>
    <td>Latest Release</td>
    <td>Far Cry Primal</td>
    </tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>8/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>9/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>
        The game earned over $500 million within its first three days of release.</td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                        Far Cry is a franchise of first-person shooter video games, all which have been published by Ubisoft. The first game, Far Cry, was developed by Crytek to premiere their CryEngine software, and released in March 2004. Subsequently, Ubisoft obtained the rights to the franchise and the bulk of the development is handled by Ubisoft Montreal with assistance from other Ubisoft satellite studios. The following games in the series have used a Ubisoft-modified version of the CryEngine, the Dunia Engine, allowing for open world gameplay. There have been four main games in the series, with a fifth one announced for a 2018 release, along with two standalone expansions; the first game, initially developed for Microsoft Windows, also saw a number of ports to video game consoles.
                    
                </p>
                <p>The Far Cry games, due to the history of their development, do not have any significant shared narrative elements, but instead share a theme of placing the player in a wilderness environment where they must help fight against one or more despots that control the region as well as surviving against wild animals that roam the open spaces. The Far Cry games feature a robust single-player campaign with later titles offering co-operative campaign support. The games also offer competitive multiplayer options and the ability for users to edit the games' maps for these matches.
                </p>
                <h2>Gameplay</h2>
                <p>The main Far Cry games are first-person shooters (FPS) with action-adventure elements. Whereas the first Far Cry and its spinoffs were typical FPS with discrete levels, Far Cry 2 and the subsequent games have adapted an open world-style of gameplay, similar in nature to the Grand Theft Auto series, with main story and side missions and optional quests to complete.

There are minimal narrative elements or chronology between the games. Instead, the Far Cry games have generally shared the theme of taking the player to "a lawless frontier" where "values and laws of today are not functioning", along with elements of having to survive in the wilderness including hunting and crafting.[2] The player often needs to work with freedom fighters attempting to regain control of a region from a ruling party, and may have to pit different sides of a conflict against each other through their actions. Some of the series' games have been more rooted in realistic conflicts, while others have involved elements of the supernatural or science fiction.[3] Ubisoft Montreal, the principal developers of the series, do consider that all games share the same common fictional universe, and have reused some minor characters to maintain that, but otherwise anticipate each game can be enjoyed as a standalone title without knowledge of the other games in the series.[4]
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/farcry.MP4" controls></video>
                </div>            
            
            <h1>SHOP for FARCRY PRIMAL</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABABGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_3P7PSATnl5qa-8t1SCUKMSycxSsQ&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNQB&adurl=">QUIKR</a></span>
                    </p>
                
                        <form action="farcry.php" method="post">
                            <span>Rs 600</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">FLIPKART</a></span>
                    </p>
                
                        <form action="farcry.php" method="post">
                            <span>Rs 649</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">AMAZON</a></span>
                    </p>
                
                        <form action="farcry.php" method="post">
                            <span>Rs 749</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/ps/far/f1.jpg","image/ps/far/f2.jpg","image/ps/far/f3.jpg","image/ps/far/f4.jpg"];
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
