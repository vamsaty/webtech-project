<!DOCTYPE html>
<html>
    
   
   
    <head>
        <link rel="stylesheet" href="xyz/content.css" />         
        <link rel="stylesheet" href="page_layout.css" />
        <title>
            about us
        </title>
    </head>
   
    <body>
                 
<style>
    
    body{
        background-image: url(image/mount.jpg);
        overflow: hidden;
        text-align: center;
    }
         
    
    #about_us{
        margin: auto;
        box-shadow: 0px 0px 40px black inset;
        height:90vh;
        display: flex;
    }
    #c2{
        
    }
    #about_us>div{
        width:300px;
        height: 75vh;
        margin-left:100px;
        cursor: pointer;
        margin-top: 40px;
        background: rgba(0,0,0,0.2);
        border: 1px solid white;
        transition: 0.3s;
        text-align: center;
        background-position: 2% 20%;
        background-size: cover;
        box-shadow: -4px 4px 2px black;
        transform: rotate3d(10,12,1,20deg);
        float: left;

    }
    
    div>div>div{
        visibility: hidden;
    }
    h1{
        margin-top:5%;
        color: white;
        text-transform: full-width;
        font: 30px Starway;
    }
    #about_us>div:hover{
        transform: translate(0px,0px);
        background-color: rgba(0,0,0,0.8);   
        filter: blur(0px);
        z-index: 100;
    }
    
    
    div>div>div{
        margin-top: 40%;
    }
    #about_us>div:hover h1{
        display: none;
    }
    #about_us>div:hover div{
        visibility: visible;
        color: black;
        font: 30px calibri;
        transition-delay: 0.7s;
        transition-duration: 0.2s;
    }
    
    div>div>div{
        background: white;
        font-weight: 800;
    }
    
    div>div>div:hover{
           box-shadow: 0px 0px 10px black inset;
    }
            </style>
            
              
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

        
        <div id="about_us">
        
            <div>
            <h1>MEMBER 1</h1>
                <div>
                <p>SHADAN ALAM KAIFEE</p>
                <p>01FB16ECS346</p>
                <p>Design</p>
                </div>
            </div>
            
            <div id="c2">
            <h1>MEMBER 2</h1>
                <div>
                <p>SATYAM SHIVAM SUNDARAM</p>
                <p>01FB16ECS344</p>
                    <p>Backend and Design</p>
                
                </div>
            </div>
            
            <div id="c2">
            <h1>MEMBER 3</h1>
                <div>
                <p>SHASHANK SHEKHAR PATHAK</p>
                <p>01FB16ECS359</p>
                <p>Content and  Idea</p>
                </div>
            </div>
            
        
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>

        