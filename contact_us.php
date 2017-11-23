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
    
    
    
    
    
    
    
    


input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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

        
        
<div class="container">
  <form action="save_data.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" required placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." required style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>

        