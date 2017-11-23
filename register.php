<html>
    <head>
    <style>
        body{
            background-image: url(image/rocket.png);
            overflow: hidden;
            background-size: cover;
        }
        h1{
             font:40px la viola;
            margin:auto;
        }
        button{
            position: relative;
            text-decoration: none;
            border: none;
            padding: 10px;
            cursor: pointer;
            font:31px la viola;
            letter-spacing: 10px;
            color: black;
            perspective: 1000px;
            transform-style: preserve-3d;
            bottom: 10px;
            transition: 0.3s;
            background: crimson;
            box-shadow: 0px 0px 2px red;
            
        }
        button:hover{
            background-color: white;
            color:crimson;
        }
        
        button:active{
            transform: rotate3d(0,0,0,0deg);
        }
        
        p{
            font:31px la viola;
            position: relative;
            bottom: 10px;
            letter-spacing: 5px;
        }
        div{
            position: absolute;
            top: 100px;
            width: 100%;
            text-align: center;
            height: 200px;
            background: rgba(240,240,240,0.8);
        }
        </style>
    </head>
    <body>
        <div>
<?php
require 'connect.inc.php';
                  
function search_username($user){
    require 'connect.inc.php';
    $query = "SELECT `id` FROM `users` WHERE `username`='$user'";
      if($query_run = mysqli_query($link,$query)){                              
          $rows = mysqli_num_rows($query_run);
          if($rows!=0){
              return true;
          }else{
              return false;
          }
              
          

      }
    
}
            if(isset($_POST['new_user']) && isset($_POST['new_fname']) && isset($_POST['new_lname']) && isset($_POST['new_pass']) && isset($_POST['new_pass2']) && isset($_POST['phn'])){
                        
                      $new_user = $_POST['new_user'];
                      $new_pass = $_POST['new_pass'];
                      $new_pass2 = $_POST['new_pass2'];
                      $new_ph = $_POST['phn'];
                      $new_fn = $_POST['new_fname'];
                      $new_ln = $_POST['new_lname'];
                      
                      if(!search_username($new_user)){
                          
                          if(!empty($_POST['new_user']) && !empty($_POST['new_fname']) && !empty($_POST['new_lname']) && !empty($_POST['new_pass']) && !empty($_POST['new_pass2']) & !empty($_POST['phn'])){
                                if($new_pass!=$new_pass2){
                                    die("Password does not match");
                                    header("Location:demo.php");
                                }
                              $query = "INSERT INTO `users` VALUES ('','$new_user','$new_pass','$new_fn','$new_ln','$new_ph')";
                                
                              if($query_run = mysqli_query($link,$query)){
                                  echo '<h1>SUCCESSFULLY REGISTERED</h1>
                                  <br>
                                  <p>Thank you for siging up with us</p>
                                  <a href="signin.php"><button>HOME</button></a>
                                  
                                  
                                  ';
                              }else{
                                  echo '<h1>UNSUCESSFUL</h1>
                                  <button><a href="login.php">GO TO login page</a></button>
                                  
                                  ';
                              }
                          }   
                          
                      }else{
                          echo '<h1>ALREADY REGISTERED</h1>
                          <p>It seems you have already registered <br>you can go to login page</p>
                          <a href="login.php"><button>GO TO login  page</button></a>';
                      }
                   
                  }else{
                echo '<h1>NOTHING FOR YOU YET</h1>
                <p>Become a member</p>
<a href="login.php"><button>LOGIN Page</button></a>
                ';
            }
    

?>
            </div>

</body>
</html>