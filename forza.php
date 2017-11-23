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
        background-image: url(image/x-box/forza/f5.jpg);
        background-size: cover;
        background-position: 0% 50%;
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
        
        <div id="main" style="background-image: url(image/x-box/forza/f3.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/x-box/forza/f2.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/x-box/gtav/gt1.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/pics_back.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/gtav1.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/gtav1.jpg"/></div>
                
                
</div>
                
                <script>
                    var img = ["image/x-box/forza/f1.jpg","image/x-box/forza/f3.jpg","image/x-box/forza/f4.jpg","image/x-box/forza/f2.jpg"];
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
    <td>FORZA HORIZON</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>23<sup>th</sup> October 2012</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>RACING<br>Video Game</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>single-player<br>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>Playgound Games</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Microsoft Studios</td>
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
        <td>8.5/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>Within 24 hours of its release, Forza Horizon generated more than US$640 million in worldwide revenue, equating to approximately 9.21 million copies sold for Take-Two Interactive</td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                    <p> Forza Horizon is a racing video game for Microsoft's Xbox 360 video game console. Developed principally by British
					games developer Playground Games in association with American developer Turn 10 Studios,the game is the fifth instalment
					in the Forza series, though it was considered more of a spin-off instead of the next true member of the series at the time.
					A sequel, Forza Horizon 2, was released on 30 September 2014.Another instalment, Forza Horizon 3, was released on 27 September 2016.
                    
                </p>
                
                <h2>Development</h2>
                <p>
                    Forza Horizon was developed by UK-based Playground Games, which is composed of employees who formerly worked at various
					studios renowned for earlier racing titles and series such as Project Gotham Racing, Driver, Colin McRae: Dirt,
					Colin McRae Rally, Race Driver: Grid and Burnout.[2] When asked about Playground Games' involvement, Dan Greenawalt,
					the head of Turn 10 Studios, said, "I wouldn't trust this partner as much as I do if I didn't expect them to surprise me
					and surprise our players. I have respect for their ability to come up with great ideas. So I think yes, they are challenged 
					by the customers the same way we are to surprise them with innovation. That's how they see themselves, that's how we see them,
					it's how they see us. It's really a shared goal."[  
                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/forza.MKV" controls></video>
                </div>            
            
            <h1>SHOP for FORZA HORIZON</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.snapdeal.com/product/forza-horizon-3-xbox-one/674209471285">SNAPDEAL</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 2,999</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.com/forza-horizon-3/p/itmekyagdsh6qx5w">FLIPKART</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 3,299</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/Forza-Horizon-2-Xbox-One/dp/B00M7TIM20">AMAZON</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 3,129</span>
                            <p><input type="submit" value="BUY"/></p>
                        </form>
                    
                    </div>
          
                </div>
            
                
            
            </div>
            
        
        </div>
         
                <script type="text/javascript">
                    
                    var images = ["image/x-box/forza/f1.jpg","image/x-box/forza/f3.jpg","image/x-box/forza/f4.jpg","image/x-box/forza/f2.jpg"];
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
