<!DOCTYPE>
<html>
    <head>
        <title>GENERE</title>
        <link rel="stylesheet" href="genere.css" />
        <link rel="stylesheet" href="page_layout.css" />
        <script src="xyz/jquery-3.2.1.min.js" type="text/javascript">
        </script>
        <style>
        
            .goto_page{
                float:left;
                position:relative;
                font: 1.5vw tahoma;
                border:0px;
                bottom:0px;
                width:100%;
                padding:1vw;
                cursor: pointer;
                transition: 0.2s;
            }
            .goto_page:hover{
                background-color: salmon;
                box-shadow: 2px 2px 0px white;
            }
            .goto_page:active{
                background-color: salmon;
                color:white;
                box-shadow: 2px 2px 10px black;
            }
        
        </style>
    </head>

    <body>     
 
            <div id="anim" >
                <a href="demo.php"><div>HOME</div></a>
                <a href="genere.php"><div>GENERE</div></a>
                <a href="about_us.php"><div>ABOUT US</div></a>
                <a href="contact_us.php"><div>CONTACT US</div></a>
                <a
                    <?php
                        require 'core.php';
                        require 'connect.inc.php';
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
        <div id="wrapper_outer">
            <!--<h1>CONSOLE</h1>-->
        <div id="central_container">
         
            <div id="console_genere">
            
                <div class="inside inside1" id="pc_con">
                    <p class="title">PC</p>
                    <span style="position:relative;float:right;" class="del"><img src="xyz/icons/close.png" style="padding:0.8vw;" /></span>
                    <article>
                        <section>
                    <h1>THE BEST pc GAMES</h1>    </section>
                        <div id="intoit">
                            
                            
                                         <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "FEELS LIKE CONTROLLING TECH OVER"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="DOTA" title="DOTA" />     
                                   <div class="about_game">
                               <p>
                                  
                                   Watch Dogs 2 (stylized as WATCH_DOGS 2) is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. It is the sequel to 2014's Watch Dogs and was released worldwide for PlayStation 4, Xbox One and Microsoft Windows in November 2016.
<br><br>
Set within a fictionalized version of the San Francisco Bay Area, the game is played from a third-person perspective and its open world is navigated on-foot or by vehicle. Players control Marcus Holloway, a hacker who works with the hacking group DedSec to take down the city's advanced surveillance system known as ctOS. There are multiple ways to complete missions, and each successful assignment increases the follower count of DedSec. Cooperative multiplayer allows for competitive one-on-one combat and connecting with other players in order to neutralize a player who is causing havoc.
                                   
                                    </p>
                                    <a href="watchdogs2.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                            </div>                            
                            
                            
                        <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "THE REAL DESTINY,IS THIS"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="DESTINY 2" title="DESTINY 2" />     
                                   <div class="about_game">
                               
                                    <p>
                              Destiny is an online-only multiplayer first-person shooter video game developed by Bungie and published by Activision. It was released worldwide on September 9, 2014, for the PlayStation 3, PlayStation 4, Xbox 360, and Xbox One consoles. Destiny marked Bungie's first new console franchise since the Halo series, and it is the first game in a ten-year agreement between Bungie and Activision. Set in a "mythic science fiction" world, the game features a multiplayer "shared-world" environment with elements of role-playing games. Activities in Destiny are divided among player versus environment (PvE) and player versus player (PvP) game types. In addition to normal story missions, PvE features three-player "strikes" and six-player raids. A free roam patrol mode is also available for each planet and features public events. PvP features objective-based modes, as well as traditional deathmatch game modes.
                                    </p>
                                    <a href="destiny2.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                       
                            </div>
                    
                        
                             <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "TALK ABOUT ONLINE GAMES, TALK ABOUT DOTA"
                                            <br>-ign
                                        </p>
                                      
                                </div>
                                     <img alt="DOTA" title="DOTA" />     
                                   <div class="about_game">
                               <p>
                                  Defense of the Ancients (DotA) is a multiplayer online battle arena mod for the video game Warcraft III: Reign of Chaos and its expansion, Warcraft III: The Frozen Throne. The objective of the game is for each team to destroy their opponents' Ancient, a heavily guarded structure at the opposing corner of the map, which is based on the "Aeon of Strife" map for StarCraft. Players use powerful units known as heroes, and are assisted by allied teammates and AI-controlled fighters. As in role-playing games, players level up their heroes and use gold to buy equipment during the mission. 
                                    </p>
                                    <a href="dota.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                        
                        
                            <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "TEAM WORK MATTERS ALOT IN THIS GAME"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="GTA V" title="GTA V" />     
                                   <div class="about_game">
                               
                                    <p>
                     Overwatch is a team-based multiplayer online first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Windows, PlayStation 4, and Xbox One. Overwatch assigns players into two teams of six, with each player selecting from a roster of pre-defined characters, known as heroes, each with a unique style of play, whose roles are divided into four general categories: Offense, Defense, Tank, and Support. Players on a team work together to secure and defend control points on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they play the game
                                    </p>
                                    <a href="overwatch.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                        </div>
                        
                    </article>
                
                </div>
                
                <div class="inside inside2" id="xbox_con">
                    <p class="title">XBOX</p>
                    <span style="position:relative;float:right;" class="del"><img src="xyz/icons/close.png" /></span>
                    <article>
                        <section>
                    <h1>The best of the last-gen: Our 5 favorite Xbox 360 games </h1>  
                        </section>
                        <div id="intoit">
                            <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                    <br>
                                        <p>
                                            "GAME WITH AN AWESOME STORYLINE"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="GTA V" title="GTA V" />     
                                   <div class="about_game">
                               
                                    <p>
                                   You know what to expect with Grand Theft Auto: drug dealers, cars, and a colorful cast of characters. The series’ seventh full-length installment is no different, showcasing a fantastic script that’s centered around three complex characters in the stunning city of Los Santos. You can choose to lead the three protagonists through gripping story missions, explore a jam-packed world filled with a welcome sense of joyous nihilism, or even carry out elaborate heists with a little help from your friends in the game’s wild multiplayer mode.
<br><br>
                                    A return to San Andreas county meant a return to the series’ trademark absurdity; where Grand Theft Auto IV‘s Liberty City (and its storyline) felt gritty and slow-paced, GTA V puts its foot on the gas and never lets up. From harrowing car chases with Franklin (one of the three playable characters) to rampaging massacres as Trevor, the game provides numerous set-piece moments to go along with its crass humor and its massive open world. Check out our full-length review here. 
                                    </p>
                                    <a href="gtav.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                             
                            
                            <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                    <br>
                                        <p>
                                            "IT GIVES YOU THE FEELS !!"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="Froza" title="Forza" />
                                   <div class="about_game">
                               
                                    <p>
                               Forza Horizon is a racing video game for Microsoft's Xbox 360 video game console. Developed principally by British games developer Playground Games in association with American developer Turn 10 Studios, the game is the fifth instalment in the Forza series, though it was considered more of a spin-off instead of the next true member of the series at the time. A sequel, Forza Horizon 2, was released on 30 September 2014. Another instalment, Forza Horizon 3, was released on 27 September 2016.
                                    </p>
                                    <a href="forza.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                               
                            </div>
                       
                            
                            
                            
                            <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "BE THE GUARDIANS OF THE GALAXY"
                                            <br>-gamespot
                                        </p>
                                    
                                </div>
                                     <img alt="HALO 5" title="HALO 5" />     
                                   <div class="about_game">
                               
                                    <p>
                               Halo 5: Guardians is a first-person shooter video game developed by 343 Industries and published by Microsoft Studios for the Xbox One home video game console. The tenth installment and fifth main entry in the Halo series, it was released worldwide on October 27, 2015. The game's plot follows two fireteams of human supersoldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan Locke. When the former goes absent without leave to track down the artificial intelligence construct Cortana, Master Chief's loyalty is called into question, and Fireteam Osiris is sent to retrieve him..
                                    </p>
                                    <a href="halo5.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                               
                            </div>
                            
                       
                              <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "GET READY FOR WAR !!!!"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="COD WW 2" title="COD WW 2" />     
                                   <div class="about_game">
                               
                                    <p>
                               Call of Duty: WWII is a first-person shooter video game developed by Sledgehammer Games and published by Activision. It is the fourteenth main installment in the Call of Duty series and was released worldwide on November 3, 2017 for Microsoft Windows, PlayStation 4 and Xbox One. It is the first title in the series to be set primarily during World War II since Call of Duty: World at War in 2008.[2] The game is set in the European theatre, and is centered around a squad in the 1st Infantry Division, following their battles on the Western Front, and set mainly in the historical events of Operation Overlord; the multiplayer expands to different fronts not seen in the campaign.
                                    </p>
                                    <a href="cod.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                            
                            
                            
                                

                            
                        </div>
                        
                    </article>
                    
                    
                    
                
                </div>
                
                <div class="inside inside3" id="ps_con">
                    <p class="title">PS</p>
                    <span style="position:relative;float:right;" class="del"><img src="xyz/icons/close.png" style="padding:1vw;" /></span>
                        <article>
                            <section>
                            <h1>THE BEST PS GAMES</h1>
                            </section>
                            <div id="intoit">
                     <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "PLAYING FOOTBALL, PLAYING FIFA 18"
                                            <br>-ign
                                        </p>
                                    
                                </div>
                                     <img alt="FIFA 18" title="FIFA 18" />     
                                   <div class="about_game">
                               
                                    <p>
                  FIFA 18 is a football simulation video game in the FIFA series of video games, developed and published by Electronic Arts and was released worldwide on 29 September 2017 for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360, Xbox One and Nintendo Switch. It is the 25th instalment in the FIFA series. Real Madrid forward Cristiano Ronaldo appears as the cover athlete 
                                    </p>
                                    <a href="fifa18.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                                
                                
                                
                                  <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "BACK TO THE MEDIVAL AGE"
                                            <br>-Gamespot
                                        </p>
                                    
                                </div>
                                     <img alt="FARCRY" title="FARCRY" />     
                                   <div class="about_game">
                                       
                                       
                                    <p>
                           Far Cry is a franchise of first-person shooter video games, all which have been published by Ubisoft. The first game, Far Cry, was developed by Crytek to premiere their CryEngine software, and released in March 2004. Subsequently, Ubisoft obtained the rights to the franchise and the bulk of the development is handled by Ubisoft Montreal with assistance from other Ubisoft satellite studios. The following games in the series have used a Ubisoft-modified version of the CryEngine, the Dunia Engine, allowing for open world gameplay. There have been four main games in the series, with a fifth one announced for a 2018 release, along with two standalone expansions; the first game, initially developed for Microsoft Windows, also saw a number of ports to video game consoles.
                                        
                                        
                                    </p>
                                    <a href="farcry.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                                
                                
                                
                                  <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "WAITING FOR IT"
                                            <br>-ign
                                        </p>
                                </div>
                                     <img alt="spiderman" title="spiderman" />     
                                   <div class="about_game">
                               
                                    <p>
                               Spider-Man is an upcoming action-adventure video game based on the Marvel Comics superhero Spider-Man. It is being developed by Insomniac Games and to be published by Sony Interactive Entertainment for PlayStation 4. It will be the first licensed game developed by Insomniac. The game will tell a new story about Spider-Man and is not tied to a film, comic book or video game. It will cover both the Peter Parker and Spider-Man aspects of the character and will feature an older and more experienced Spider-Man
                                    </p>
                                    <a href="spider.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                                
                                
                                
                                
                                
                                  <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "HUNTING THE WITCHES !!!"
                                            <br>-ign
                                    
                                        </p>
                                </div>
                                     <img alt="Witcher3" title="witcher 3" />     
                                   <div class="about_game">
                               
                                    <p>
                              The Witcher 3: Wild Hunt is a 2015 action role-playing video game developed and published by CD Projekt. Based on The Witcher series of fantasy novels by Polish author Andrzej Sapkowski, it is the sequel to the 2011 video game The Witcher 2: Assassins of Kings and the third installment in The Witcher video-game series. Played in an open world with a third-person perspective, players control protagonist Geralt of Rivia. Geralt, a monster hunter known as a Witcher, is looking for his missing adopted daughter, who is on the run from the Wild Hunt: an otherworldly force determined to capture and use her powers.
                                    </p>
                                    <a href="witcher.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                                
                                
                       
                                
                            
                        </div>
                            
                            
                        </article>
                </div>
                <!--
                <div class="inside inside4" id="_con">
                    <p class="title">QWER</p>
                    <span style="position:relative;float:right;" class="del"><img src="xyz/icons/close.png" style="padding:1vw;" /></span>
                    <article>
                        <section>
                        <h1>THE BEST px GAMES</h1>
                        <p class="by" >-Satyam</p></section>
                        <div id="intoit">
                            <div>
                                <div class="review">
                                    <span class="close_review"><img src="xyz/icons/close.png"/></span>
                                    <br>
                                        <p>
                                            "the best game ever"
                                            <br>-ign
                                        </p>
                                        <p>
                                            "the best game ever"
                                            <br>-ign
                                        </p>
                                        <p>
                                            "the best game ever"
                                            <br>-ign
                                        </p>
                                        <p>
                                            "the best game ever"
                                            <br>-ign
                                        </p>
                                </div>
                                     <img alt="GTA V" title="GTA V" />     
                                   <div class="about_game">
                               
                                    <p>
                                   You know what to expect with Grand Theft Auto: drug dealers, cars, and a colorful cast of characters. The series’ seventh full-length installment is no different, showcasing a fantastic script that’s centered around three complex characters in the stunning city of Los Santos. You can choose to lead the three protagonists through gripping story missions, explore a jam-packed world filled with a welcome sense of joyous nihilism, or even carry out elaborate heists with a little help from your friends in the game’s wild multiplayer mode.
<br><br>
                                    A return to San Andreas county meant a return to the series’ trademark absurdity; where Grand Theft Auto IV‘s Liberty City (and its storyline) felt gritty and slow-paced, GTA V puts its foot on the gas and never lets up. From harrowing car chases with Franklin (one of the three playable characters) to rampaging massacres as Trevor, the game provides numerous set-piece moments to go along with its crass humor and its massive open world. Check out our full-length review here. 
                                    </p>
                                    <a href="gtav.php"><button class="goto_page">Read more</button>
                                        </a>
                                    
                                </div>
                                
                           
                               
                            </div>
                       
                                
                            
                        </div>
                    </article>
                </div>
                -->
                
                
            </div>

        </div>
            
            
             <script type="text/javascript">
                $(".review").click(function(e){
                    e.stopImmediatePropagation();
                $(this).css({"height":"50%","transition":"0.2s","overflow":"auto","overflow-x":"hidden"});
                }).delay(100);
                     $(".close_review").click(function(e){
                         e.stopImmediatePropagation();
                        $(this).parent().css({"height":"3.3vw","overflow":"hidden"});
                     });
                        
            </script>
            
            
            <script type="text/javascript">
                var ins = document.querySelectorAll(".inside");
                var len = ins.length;
    
                $(".inside1").click(function(){
                    $(this).css({"background-position":"20% 0%"});
                });
                $(".inside2").click(function(){
                    $(this).css({"background-position":"87% 0%"});
                });
                $(".inside3").click(function(){
                    $(this).css({"background-position":"20% 100%"});
                });
                $(".inside4").click(function(){
                    $(this).css({"background-position":"87% 0%"});
                });
                
                $(".inside").click(function(e){
                    $(this).siblings().hide();
                    
                 
                    
        $(this).css({
                     "background-size":"cover",
                     "background-color":" transparent",
                     "transform":"scale(1)",
                     "overflow":"auto",
                     "transition":"0.2s",
                     "position":"fixed",
                     "top":"0px",
                     "width":"100vw",
                     "height":"100vh",
                     "border":"none"
                    });
                    
                       $(this).find("*").css({"display":"block","transition":"0.6s"});
                    
                $(this).find(".title").css({"display":"none"});
                    e.stopImmediatePropagation();
                    
        $(".del").click(function(e){
                        e.stopImmediatePropagation();  
            
            $(this).parent().css({
                "flex":"1",
                "background-color":"transparent",
                "transform":"scale(1)",
                "position":"relative",
                "transition":"0.2s",
                "height":"100%"
            });
                        
                        $(this).parent().siblings().show();
                        
                        $(this).siblings().css({
                            "display":"none"
                        });
                        
                        $(this).siblings(".title").css({
                            "display":"block"
                        });
                        
                        $(this).css({
                            "display":"none",
                        });
                               
                    });
                    
                
                });
                
                
            

                           
            
                   
                
            </script>
            
            
            
            
            
            
            
            
            
            

            
        <script type="text/javascript">
            
            
            /*FOR PC*/
        var ins = document.querySelectorAll("#pc_con #intoit >div >img");
        var images = ["watchdogs/w1.jpg","destiny/de2.jpg","dota/d3.jpg","overwatch/o4.jpg"];
            
            for(var i=0;i<ins.length;i++){
                ins[i].src="image/pc/"+images[i%5];
                ins[i].style.height="22vw";
            }
            
            var all = document.querySelectorAll("#pc_con #intoit>div");
            
            var images = ["watchdogs/w1.jpg","destiny/de3.jpg","dota/d2.jpg","overwatch/o2.jpg"];

            
            for(var i=0;i<all.length;i++){
                all[i].style.backgroundImage="url(image/pc/"+images[i%4]+")";
                all[i].style.backgroundSize="cover";
            }
            /*PC END*/
            
            
            
            
            /*FOR XBOX*/
        var ins = document.querySelectorAll("#xbox_con #intoit >div >img");
        var images = ["/gtav/gtav3.jpg","forza/f2.jpg","halo/h4.jpg","cod/c2.jpg"];
            
            for(var i=0;i<ins.length;i++){
                ins[i].src="image/x-box/"+images[i%5];
                ins[i].style.height="22vw";
    
            }
        var all = document.querySelectorAll("#xbox_con #intoit>div");
            
            
            var images = ["gtav/gv.jpg","forza/f3.jpg","halo/h3.jpg","cod/c4.png"];
    
            
            for(var i=0;i<all.length;i++){
                all[i].style.backgroundImage="url(image/x-box/"+images[i%5]+")";
                all[i].style.backgroundSize="cover";
            }
            /*XBOX END*/
            
            
            
                   /*FOR PS*/
        var ins = document.querySelectorAll("#ps_con #intoit >div >img");
        var images = ["fifa/f1.jpg","far/f2.jpg","spider/s1.png","witcher/w1.jpg"];
            
            for(var i=0;i<ins.length;i++){
                ins[i].src="image/ps/"+images[i%5];
                ins[i].style.height="22vw";
    
            }
        var all = document.querySelectorAll("#ps_con #intoit>div");
            
            
        var images = ["fifa/f1.jpg","far/f1.jpg","spider/s1.png","witcher/w1.jpg"];
    
            
            for(var i=0;i<all.length;i++){
                all[i].style.backgroundImage="url(image/ps/"+images[i%5]+")";
                all[i].style.backgroundSize="cover";
            }
            /*PS END*/
                        
            
            
            
            var ins = document.querySelectorAll(".about_game >p");
            for(var i=0;i<ins.length;i++){
                ins[i].style.color="white";
                ins[i].style.padding="1vw";
                ins[i].style.backgroundColor="rgba(0,0,0,1)";
            }
    
        
        </script>
            
            
        </div>
     <span style="position:absolute;right:0px;bottom:0px; font:1.5vw calibri;color:white;">Powered by Nvidia</span>
    </body>
</html>