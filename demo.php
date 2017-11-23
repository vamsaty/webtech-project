<!DOCTYPE html>
<html>
    
    
    <head>
        <link rel="stylesheet" href="xyz/content.css" />
        <link rel="stylesheet" href="page_layout.css" />        
        <link rel="stylesheet" href="demo.css" />
        <title>home</title>
        <style>
            body{
                height: 100%;
                display: block;
            }
            
            .sim{
                width:400px;
            }
        
        </style>
    </head>
   
    <body style="background-image: url(image/wowc.jpg);">
                 

            
              
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
            
              <div class="slideshow-container">
                      <div class="mySlides fade">
                        <div class="numbertext">1 / 6</div>
                        <img class="sim">
                      </div>

                      <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                        <img class="sim">
                      </div>

                      <div class="mySlides fade">
                        <div class="numbertext">3 / 6</div>
                        <img class="sim">
                      </div>
                  <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                        <img class="sim">
                  </div>
                  
                  <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img class="sim">
                  </div>
                  
                  <div class="mySlides fade">
                        <div class="numbertext">6 / 6</div>
                        <img class="sim">
                 </div>

                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

        
            <script>
                
             var images = ["image/ps/spider/s1.png",
         "image/ps/spider/s3.jpg",
        "image/ps/spider/s4.jpg",
        "image/ps/witcher/w2.jpg",
        "image/ps/fifa/f1.jpg",
        "image/ps/fifa/f3.jpg"
                           
                                 ];
                    var shops = document.querySelectorAll(".sim");
                    for(var i=0;i<shops.length;i++){
                        shops[i].setAttribute("src",images[i]);
                        shops[i].style.width=100+"%";
                        shops[i].style.boxShadow="0px 0px 100px white";
                        
                    }
        
        var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
        </script>
        
        <style>
            #lower{
                width:100%;
                height:800px;    
                padding: 10px;
            }
            
            .dats{
                width:25vw;
                height:15vw;
                
                margin:0px;
                float: left;
                margin:5px;
                box-shadow: 0px 0px 100px black;
                transition: 0.2s;
            }
                
            .dats:hover{
                box-shadow: 0px 0px 0px black;
            }
            
            h2{
                color: white;
                font-family: cursive;
                margin-left: 100px;
            }
        </style>
        

        <h2>CHOOSE YOUR GAME</h2>
        <hr>
        <div id="lower">
         <a href="spider.php"><img class="dats" src="image/ps/spider/s1.png" /></a>    
         <a href="witcher3.php"><img class="dats" src="image/ps/witcher/w2.jpg" /></a>    
         <a href="forza.php"><img class="dats" src="image/x-box/forza/f2.jpg"/></a>  
             
         <a href="fifa18.php"><img class="dats" src="image/ps/fifa/f1.jpg" /></a>    
         <a href="dota.php"><img class="dats" src="image/pc/dota/d4.jpg" /></a>  
        
        </div>
    
        
        
            

        

        
        
        
    
    
    </body>
    
</html>
