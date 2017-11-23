<!DOCTYPE>
<?php 
    require 'core.php';
    require 'connect.inc.php';
?>
<html>
    <head><title>login</title>
    <link href="log_sign.css" rel="stylesheet" />    
    <link href="page_layout.css" rel="stylesheet" />    
    <script src="xyz/jquery-3.2.1.min.js" type="text/javascript"></script>
    
    <!--<script src="xyz/jquery.js" type="text/javascript"></script>-->
        <script>
            function close_warn(){
                this.style.coloe="white";
            }
        </script>
    <style>
        #warning{
            position: absolute;
            right: 20px;
            widows: 100px; 
            height: 50px;
            background: crimson;
        }
        
    </style>
    </head>

    
<body onload="dd();">

       <div id="anim" >
                <a href="demo.php"><div>HOME</div></a>
                <a href="genere.php"><div>GENERE</div></a>
                <a href="about_us.php"><div>ABOUT US</div></a>
                <a href="contact_us.php"><div>CONTACT US</div></a>
        </div>

        <div id="disp_once">
      <div id="choose">
            
          <div id="log" onclick="set_log()">          
              <div id="rhs">
           
                  
                  <?php 
                  if(!loggedin()){
                  
                echo '<form method="POST" action="signin.php">
                <span style="font:40px Starway;margin-top:10px;color:dodgerblue;">LOGIN</span>
                        <fieldset>
                        <hr>
                        <div><label><legend>username</legend><input placeholder="username" type="text" required name="user"/></label></div>
                        
                        <div><label><legend>password</legend><input type="password" name="pass" placeholder="password" required  /></label></div>
      

                        <input type="submit" id="login_butt" value="LOGIN"/>
                      <hr/>
                        <span id="NAM">not a member</span>
                    </fieldset>
                </form>';
                    
                  }
                  ?>
            </div>
              
              
              
          </div>
              
          
          <div id="sign">
              <span id="close_sign">&empty;</span>
              <div id="lhs">
                  
                  
                <form action="register.php" method="POST">
                    <fieldset id="fie_sign">
                        <div id="fie_cont">
                        <h1>REGISTER HERE</h1>

                        <section>
                        <label><legend>USERNAME</legend>
                            <input type="text" name="new_user" required/>
                            </label>
                        </section> 
                             
                        <section>
                        <label><legend>FIRST NAME</legend>
                            <input type="text" name="new_fname" required/>
                            </label>
                        </section> 
                        
                       <section>
                        <label><legend>PASSWORD</legend>
                            <input type="password" name="new_pass" required/>
                            </label>
                        </section> 
                            <br>
                                <section>
                        <label><legend>LAST NAME</legend>
                            <input type="text" name="new_lname" required/>
                            </label>
                        </section> 
                            
                        <section>
                        <label><legend>PASSWORD AGAIN</legend>
                            <input type="password" name="new_pass2" required/>
                            </label>
                        </section>
                        <section>
                        <label><legend>PHONE NUMBER</legend>
                            <input type="num" name="phn" />
                            </label>
                        </section>
                        
                        
                        </div>
                        <input type="submit" value="sign up" id="login_butt1" style="position:relative;right:0px;"/>            
                    </fieldset>
                  
                  
                </form>
                
              
              </div>
              
          </div>
          
        </div> 
    </div>
    
    <script type="text/javascript">
          
                      
        
    $("#log").click(function(e){
        $(this).css({"height":"30vw"});
        $("#rhs").css({"visibility":"visible"});
        e.stopImmediatePropagation();
    });
        
        
    $("#close_sign").click(function(){
            $(this).parent().fadeOut(1000);
    });
         
    $("#NAM").click(function(){
        $("#sign").css({"display":"block"});
        setTimeout(function(){
            $("#sign").css({
                    "transition":"0.5s","width":"100%"
            });
                
        },500);
        $("#fie_sign").css({"width":"auto","display":"inline-block"});
            
    });
              
                
                sign = document.getElementById("sign");
                rhs = document.getElementById("rhs");
                h1 = document.getElementsByTagName("h1");
                fie_sign = document.getElementById("fie_sign");
                ins = document.getElementsByClassName("ins");        
                rhs.style.display="block";
        rhs.style.clear="both";
                rhs.style.visibility="visible";
                ssign=0;
                slog=0;
        

        

                function set_log(){
                        slog=1; 
                        //log.style.height = 200+"px";
                        
                        //sign.style.flex = 1;
                        //sign.style.height = 200+"px";
                        //setTimeout(function(){rhs.style.display = "block";},300);
                }
        
    
    
    </script>
    

</body>
</html>