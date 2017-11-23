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
            
        

        <title>CALL OF DUTY WW2</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/x-box/cod/c4.png);
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
        
        <div id="main" style="background-image: url(image/x-box/cod/c1.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/x-box/cod/c2.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/x-box/cod/c4.png"/></div>
                <div><img class="dd" src="image/x-box/cod/c2.jpg"/></div>
                <div><img class="dd" src="image/x-box/cod/c1.jpg"/></div>
                
                
</div>
               
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>CALL OF DUTY</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/Call of duty ww2</td>
    <td>3<sup>th</sup> november 2017</td>
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
    <td>Sledgehammer Games</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Activision</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>Bret Robbins<br />Dennis Adams</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Glen Schofield<br />Michael Condrey</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Sledgehammer Games</td>
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
                    <p> Call of Duty: WWII is a first-person shooter video game developed by Sledgehammer Games and published by Activision. It is the fourteenth main installment in the Call of Duty series and was released worldwide on November 3, 2017 for Microsoft Windows, PlayStation 4 and Xbox One. It is the first title in the series to be set primarily during World War II since Call of Duty: World at War in 2008.[2] The game is set in the European theatre, and is centered around a squad in the 1st Infantry Division, following their battles on the Western Front, and set mainly in the historical events of Operation Overlord; the multiplayer expands to different fronts not seen in the campaign.
                    
                </p>
                <p>
                    Call of Duty: WWII is a first-person shooter game but it removes the advanced system of movement present in the two previous Call of Duty titles, which included double jumping and wall running. Instead, it features a return of traditional movement to the series, taking it back to a "boots on the ground" gameplay style. The game does not feature an unlimited sprint mechanic, seen in the previous two titles.[3] Instead of a "slide" movement mechanic, which allowed players to slide quickly on the ground, WWII features a "hit-the-deck" mechanic that allows the player to leap forward and throw themselves on the ground in order to get to cover quickly,
                </p>
                <h2>Development</h2>
                <p>
               Call of Duty: World War II is the second game in the Call of Duty franchise developed by Sledgehammer Games, and the third to benefit under publisher Activision's three-year development cycle (the first being Sledgehammer's Call of Duty: Advanced Warfare) in order for a longer development time for each game. A modern Call of Duty title set in World War II was alluded to in a 2014 Call of Duty: Advanced Warfare launch interview with Michael Condrey, co-founder of Sledgehammer Games. In the interview by Metro, the interviewer asked him what the possibilities of where the next Call of Duty could go in terms of setting. Condrey responded, "Well, no. It’s curious. I can only answer from my own personal tastes, this is my own personal opinion. But some of my favorite pieces of entertainment are set in World War II. Band of Brothers, I’m a massive fan of Band of Brothers." Condrey then dived further into the subject, "And that’s a great hero’s war, kind of the last that was recognised as a noble cause in a war.              
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/cod.MP4" controls></video>
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
                
                        <form  method="post">
                            <span>Rs 600</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">FLIPKART</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 649</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">AMAZON</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 749</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/x-box/cod/c4.png","image/x-box/cod/c3.jpg",
                                  "image/x-box/cod/c2.jpg","image/x-box/cod/c1.jpg"];
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
