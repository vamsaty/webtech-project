<html>
    <head>
    <title>
        PC games
        </title>
    </head>
<body>
                 
<style>
    body{
        background-color: rgba(30,40,40,1);
        background-image: url(image/tombra/tr1.jpg);
        background-attachment: fixed;
        background-position: bottom;
        background-size: cover;
        overflow-x: hidden;
        margin: 0px;
    }
                #anim{
                    display: flex;
                    background: transparent;
                    height: auto;
                    text-align: center;
                    cursor:pointer;
                    font:25px Starway;
                    column-count: 3;
                }
            #anim > a{
                width:50px;
                flex: 1;
                float: left;
                padding: 10px;
                color: white;
                height:100%;
                transition:0.2s;
            }
        #anim a{
            color:white;
            text-decoration: none
        }
            #anim a:hover {
                background-color: rgba(200,200,200,0.4);
                box-shadow: 0px -2px 0px black;
                flex:1;
            }
    
            #anim a:active{
                background: rgba(0,0,0,0.2);    
            }
              
    #wrapper{
        margin-top:200px;   
    }
    
    .pc_games{
        width: 90%;
        background-attachment: fixed;
        display: block;
        height: 125%;
        margin: auto;
    }
    
    
    #left{
        float: left;
        height: auto;
        width: 100%;        
        box-shadow: 0px 0px 2px black;
        
        margin-top: 50px;
        
    }
    #slider{
        text-align: center;
        padding: 2px;
    }
    
    .present{
        width: 510px;
        height:auto;
        display: inline-block;
    }
    
    #img_container{
        
        display: inline-block;
        text-align: center;
        padding: 10px;
    }
    
    .list{
        width: 200px;
        height: auto;
        margin: auto;
        box-shadow: 0px 0px 2px red;
        display: inline-block;
    }
    
    #right{
        float: right;
        margin-top:50px;
        margin-left: 20px;
        width: 520px;
        height: auto;
        padding: 10px;
        background: white;
        font: 15px tahoma;
        word-break: break-all;
        
    }
    
            </style>
            
              
            <div id="anim" >
                <a href="demo.php"><div>HOME</div></a>
                <a href="genere.php"><div>GENERE</div></a>
                <a  <?php
                        require 'core.php';
                        require 'connect.inc.php';
                        if(loggedin()){
                            echo 'href="logout.php"'
                   ?>
                   >LOGOUT
                <?php
                        }else{
                            echo 'href="login.php"';
                            ?>
                    >LOGIN
                    <?php } ?>
                </a>
                   
            </div>

            
            <div id="wrapper">
                <div class="pc_games">
                    <div id="left">
                        <div id="slider">
                            <img class="present" src="image/witcher/witcher2.jpg" />
                            <div id="img_container">
                            <img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/>
                            </div>
                        </div>
                        
                    </div>
                    <div id="right">
                        asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br>
                    </div>   
                
                </div>
       <!--     
                 <div class="pc_games">
                    <div id="left">
                        <div id="slider">
                            <img class="present" src="image/witcher/witcher2.jpg" />
                            <div id="img_container">
                            <img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/>
                            </div>
                        </div>
                        
                    </div>
                    <div id="right">
                        asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br>
                    </div>   
                
                </div>
                
                                 <div class="pc_games">
                    <div id="left">
                        <div id="slider">
                            <img class="present" src="image/watchdogs.jpg" />
                            <div id="img_container">
                            <img class="list"  src="image/watchdogs/watchdogs.jpg"/><img class="list"  src="image/watchdogs/watchdogs.jpg"/><img class="list"  src="image/watchdogs/watchdogs.jpg"/><img class="list"  src="image/watchdogs/watchdogs.jpg"/>
                            </div>
                        </div>
                        
                    </div>
                    <div id="right">
                        asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br>
                    </div>   
                
                </div>
                
                 <div class="pc_games">
                    <div id="left">
                        <div id="slider">
                            <img class="present" src="image/witcher/witcher2.jpg" />
                            <div id="img_container">
                            <img class="list"  src="image/witcher/witcher2.jpg"/><img class="list"  src="image/witcher/witcher2.jpg"/>
                            <img class="list"  src="image/witcher/witcher2.jpg"/>  <img class="list"  src="image/witcher/witcher2.jpg"/>
                            </div>
                        </div>
                        
                    </div>
                    <div id="right">
                        asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br><br>
                          asdjfpoiewq prasdfasdfas dfa sdjfpoie wqprasd f asdfasdfasd jfpoiewqpra sdfasdfa sdfasdjfpo iewqpra sdfasdfas dfasdjfpoi ewqprasdfa sdfasdf<br>
                    </div>   
                
                </div>

    -->
             
            </div>
    
   
                     <script type="text/javascript">
        var ins = document.querySelectorAll(".pc_games");
        var images = ["witch.jpg","starwars.jpg","watchdogs.jpg"];
            
            for(var i=0;i<ins.length;i++){
                ins[i].style.backgroundImage="url(image/"+images[0]+")";
                ins[i].style.backgroundSize="cover";
                //ins[i].style.marginTop="70px";
            }
            
        </script>
    
                
            
    </body>
</html>
            
        
        
        