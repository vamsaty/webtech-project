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
            
        

        <title>GTA V</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/x-box/gtav/gt1.jpg);
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
        
        <div id="main" style="background-image: url(image/x-box/gtav/pics_back.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/x-box/gtav/gtav1.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/x-box/gtav/gt1.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/pics_back.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/gtav1.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>GRAND THEFT AUTO</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>17<sup>th</sup> September 2013</td>
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
    <td>Rockstar North</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Rockstar Games</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>LESLIE BENZIES<br>IMRAN SARWAR</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Adam Fowler</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Aaron Garbut</td>
</tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>10/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>9/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>Within 24 hours of its release, Grand Theft Auto V generated more than US$800 million in worldwide revenue, equating to approximately 11.21 million copies sold for Take-Two Interactive</td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> Grand Theft Auto V is an action-adventure video game developed by Rockstar North and published by Rockstar Games. It was released on 17 September 2013 for PlayStation 3 and Xbox 360, on 18 November 2014 for PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. It is the first main entry in the Grand Theft Auto series since 2008's Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas' open countryside and the fictional city of Los Santos, based on Los Angeles.
                    
                </p>
                <p>
                    The game is played from either a third-person or first-person perspective and its world is navigated on foot or by vehicle. Players control the three lead protagonists throughout single-player and switch between them both during and outside missions. The story is centred on the heist sequences, and many missions involve shooting and driving gameplay. A "wanted" system governs the aggression of law enforcement response to players who commit crimes. Grand Theft Auto Online, the online multiplayer mode, lets up to 30 players explore the open world and engage in cooperative or competitive game matches.
                </p>
                <h2>Development</h2>
                <p>
                Development began soon after Grand Theft Auto IV's release and was shared between many of Rockstar's studios worldwide. The development team drew influence from many of their previous projects such as Red Dead Redemption and Max Payne 3, and designed the game around three lead protagonists to innovate on the core structure of its predecessors. Much of the development work constituted the open world's creation, and several team members conducted field research around California to capture footage for the design team. The game's soundtrack features an original score composed by a team of producers who collaborated over several years
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/xb/gtav1.mp4" controls></video>
                </div>            
            
            <h1>SHOP for GTA V</h1>
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
                
                        <form action="gtav.php" method="post">
                            <span>Rs 600</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">FLIPKART</a></span>
                    </p>
                
                        <form action="gtav.php" method="post">
                            <span>Rs 649</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">AMAZON</a></span>
                    </p>
                
                        <form action="gtav.php" method="post">
                            <span>Rs 749</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/x-box/gtav/gt1.jpg","image/x-box/gtav/gtav2.jpg","image/x-box/gtav/gtav3.jpg"];
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
