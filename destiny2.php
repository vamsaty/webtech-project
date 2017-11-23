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
            
        

        <title>Destiny 2</title>
    
    </head>
   
    <body>
                 
<style>
    header{
        width: 100%;
        height: 60vh;
        background-image: url(image/pc/destiny/de1.jpg);
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
        
        <div id="main" style="background-image: url(image/pc/destiny/de2.jpg);">
            
            <div id="firstdiv">
            <div id="game_details">
                            <img src="image/pc/destiny/de2.jpg" class="game_pic"/>
<div class="pics">
                <div><img class="dd" src="image/x-box/gtav/gt1.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/pics_back.jpg"/></div>
                <div><img class="dd" src="image/x-box/gtav/gtav1.jpg"/></div>
                
</div>
               <script>
                    var img = ["image/pc/destiny/de2.jpg","image/pc/destiny/de1.jpg","image/pc/destiny/de3.jpg","image/pc/destiny/de4.jpg"];
                    var dd = document.querySelectorAll(".dd");
                    for(var i=0;i<dd.length;i++){
                        dd[i].setAttribute("src",img[i]);
                        dd[i].style.width="120px";
                        //dd[i].style.boxShadow="0px 0px 120px red";
                    }
                    
                </script>
                
                
<div id="review_main">
<table>
<tr>
    <td>SERIES</td>
    <td>DESTINY 2</td>
</tr>
<tr>
    <td>RELEASE DATE<br>x-box/gtav</td>
    <td>6<sup>th</sup> September 2017</td>
</tr>
<tr>
    <td>GENERE(S)</td>
    <td>ACTION<br>ROLE-PLAYING</td>
</tr>

<tr>
    <td>MODE(S)</td>
    <td>Multiplayer</td>
</tr>
<tr>
    <td>DEVELOPER(S)</td>
    <td>Bungie</td>
</tr>
<tr>
    <td>Publisher(s)</td>
    <td>Activision</td>
</tr>
<tr>
    <td>PRODUCER</td>
    <td>Gavin Irby<br>Lars Bakken</td>
</tr>
<tr>
    <td>DESIGNER(S)</td>
    <td>Jacob Benton</td>
</tr>
    <tr>
    <td>PROGRAMMER(S)</td>
    <td>Chris Butcher</td>
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
        <td>8/10</td>
        </tr>
    </table>
    
    <table class="facts">

    <tr>
        <td>If the original Destiny was known for anything it was the fantastic and solid gunplay it offered players. Bungie has decided to alter a
		few aspects of their mechanics in order to add more balance and nuance. The biggest change came to the weapons system which received a complete
		rehaul from the first title.


        </td>
        <td></td>
        
    </tr>
    
    </table>
    
    </div>
    
    
    
</div>
                
                <section id="contents">
                <h2>ABOUT</h2>
                 <p> 
					Destiny 2 is an online-only multiplayer first-person shooter video game developed by Bungie and published by Activision.It was released
					for PlayStation 4 and Xbox One on September 6, 2017, followed by a Microsoft Windows version the following month. It is the sequel to 
					2014's Destiny and its subsequent expansions. Set in a "mythic science fiction" world, thegame features a multiplayer "shared-world" 
					environment with elements of role-playing games. Players assume the role of a Guardian, protectors of Earth's last safe city as they
					wield a power called Light to protect the Last City from different alien races. One of these races, the Cabal, lead by their emperor, 
					Dominus Ghaul, infiltrate the Last City and strips all Guardians of their Light. The player sets out on a journey to regain their Light 
					and find a way to defeat Ghaul and his Red Legion army and take back the Last City.
                </p>
                <p>
				   Like the original, activities in Destiny 2 are divided among player versus environment (PvE) and player versus player (PvP) game types.
				   In addition to normal story missions, PvE features three-player "strikes" and six-player raids. A free roam patrol mode is also available
				   for each planet and features public events as well as new activities not featured in the original. These new activities have an emphasis 
				   on exploration of the planets and interactions with non-player characters (NPCs) on the planets; the original Destiny only featured NPCs 
				   in social spaces. PvP features objective-based modes, as well as traditional deathmatch game modes. All PvP game modes are four-versus-four,
				   a change from the previous installment, which featured six-versus-six, three-versus-three, and two-versus-two variants. Bungie has already 
				   announced two expansion packs for the game, which will further the story and add new content and missions. The first expansion, Curse of
				   Osiris, is set to release on December 5, 2017, while the second expansion is planned for release in spring 2018.
                </p>
                <h2>Development</h2>
                <p>
                   A sequel to Destiny was first mentioned in November 2014, two months after the original released, by Activision chief executive officer
				   Eric Hirshberg, where he said "Work has also begun on future expansion packs as well as on our next full game release".[16] Based on 
				   documents of the original release schedule for Destiny, Bungie and Activision intended to release new, disc-based sequels every other year
				   until 2019, with large downloadable expansions in between.[17] Originally planned for a September 2016 release (based on the original 
				   documents),[17] Bungie confirmed on February 11, 2016 that a full sequel would release in 2017.[18][19] That same month, video game writer 
				   Christopher Schlerf, who was the lead writer for Halo 4 and worked on Mass Effect: Andromeda, joined Bungie.[20] In December 2016, Bungie 
				   announced that Vicarious Visions would be joining the development team along with Activision.[21] Unlike the original, it was rumored that
				   Destiny 2 would also release on Microsoft Windows,[22] which was confirmed on March 30, 2017.[23]

                </p>
                    
                    </section>
                    
                </div>
            </div>
            

            
            <div id="secdiv">
            
                <div>
                    <h1>OFFICIAL TRAILER</h1>
                <video src="video/destiny.MP4" controls></video>
                </div>            
            
            <h1>SHOP for DESTINY 2</h1>
                <div class="shop_this">
                    <?php
                        if(loggedin()){
                            echo '<span>asdf</span>';
                        }
                        
                        
                    ?>
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.ebay.com/sch/i.html?_nkw=destiny+2">eBay</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 3,000</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.flipkart.com/destiny-2/p/itmet5qandwgbhdx">FLIPKART</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 3,190</span>
                        </form>
                    
                    </div>
                    
                    <div><img class="shop_pic"/>
                    <p>
                        <span><a href="https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Dvideogames&field-keywords=destiny+2&tag=yhooinkenshoo-21&ascsubtag=52cfb527-3a2d-4d12-a49b-b8fcd02e126d">AMAZON</a></span>
                    </p>
                
                        <form  method="post">
                            <span>Rs 2,999</span>
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
