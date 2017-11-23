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
            
        

        <title>HALO 5</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/x-box/halo/h3.jpg);
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
        
        <div id="main" style="background-image: url(image/x-box/halo/h4.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/x-box/halo/h1.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/x-box/halo5/gt1.jpg"/></div>
                <div><img class="dd" src="image/x-box/halo5/pics_back.jpg"/></div>
                <div><img class="dd" src="image/x-box/halo5/h1.jpg"/></div>
                
                
</div>
                
                       
                <script>
                    var img = ["image/x-box/halo/h2.jpg","image/x-box/halo/h1.jpg",
                              "image/x-box/halo/h3.jpg","image/x-box/halo/h4.jpg"];
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
    <td>HALO</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/halo5</td>
    <td>27<sup>th</sup> October 2015</td>
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
    <td>Microsoft Studios</td>
</tr>


</tr>
</table>    
    
    
<div id="content_reviews">
    <table>
        <br><br>
        <caption style="font:20px Starway">REVIEWS BY TOP WEBSITES</caption>
        <tr>
        <td><a href="ign.com">IGN</a></td>
        <td>9/10</td>
        </tr>
        <tr>
        <td><a href="gamespot.com">GameSpot</a></td>
        <td>9/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>The game's mainstream marketing received some criticism for being different from the game's plot</td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> 
                        Halo 5: Guardians is a first-person shooter video game developed by 343 Industries and published by Microsoft Studios for the Xbox One home video game console. The tenth installment and fifth main entry in the Halo series, it was released worldwide on October 27, 2015. The game's plot follows two fireteams of human supersoldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan Locke. When the former goes absent without leave to track down the artificial intelligence construct Cortana, Master Chief's loyalty is called into question, and Fireteam Osiris is sent to retrieve him..
                    
                </p>
               
                <h2>Development</h2>
                <p>
              343 Industries general manager Bonnie Ross recalled that after Halo 4, the team spent a lot of time discussing where they wanted to take the Halo series, reflecting on feedback from fans about what they did and did not like. In late 2012, game leads Tim Longo, David Berger, and Chris Lee laid out the studio's vision for the next game from a creative and technical standpoint, setting key goals to focus on: utilizing the Xbox One's hardware and Microsoft's cloud infrastructure for larger campaign and multiplayer spaces, deeper player investment systems, and a frame rate of 60 frames per second (FPS).

At Electronic Entertainment Expo 2013 (E3), Microsoft announced a new, then-untitled addition to the Halo series, along with a trailer appearing to depict a post-Halo 4 Master Chief. After E3, Phil Spencer said the previously-announced "Reclaimer Trilogy" had been expanded into a longer series of games, explaining that the developers "[didn't] want to limit the Reclaimer story within a trilogy"
                
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/halo5.MP4" controls></video>
                </div>            
            
            <h1>SHOP for GTA V</h1>
                <div class="shop_this">
                    <?php
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABABGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_3P7PSATnl5qa-8t1SCUKMSycxSsQ&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNQB&adurl=">QUIKR</a></span>
                    </p>
                
                        <form action="halo5.php" method="post">
                            <span>Rs 600</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">FLIPKART</a></span>
                    </p>
                
                        <form action="halo5.php" method="post">
                            <span>Rs 649</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjSj528wtLXAhXJGhsKHUtRDmoYABADGgJ3bA&ohost=www.google.co.in&cid=CAASEuRo1dmO9ipuiheqcLPqiCGyMg&sig=AOD64_1PDfgTyQzkG-f7UcilnnlPyo3gAw&ctype=5&q=&ved=0ahUKEwj3yZe8wtLXAhWE2hoKHVZMBDcQ9aACCNkB&adurl=">AMAZON</a></span>
                    </p>
                
                        <form action="halo5.php" method="post">
                            <span>Rs 749</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/x-box/halo/h4.jpg","image/x-box/halo/h3.jpg","image/x-box/halo/h1.jpg","image/x-box/halo/h2.jp"];
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
