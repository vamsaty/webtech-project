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

if(isset($_POST['user']) && isset($_POST['pass'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $password_hash = md5($password);
    
    if( !empty($_POST['user']) && !empty($_POST['pass'])){
        $query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password'";
        require 'core.php';

        if($query_run = mysqli_query($link,$query)){
            $num_rows = mysqli_num_rows($query_run);
        
            if($num_rows==0){
                
            echo '<h1>INVALID ID/PASSWORD</h1>
                          <p>It seems you have entered wrong <br>ID or password
                          </p>
                          <a href="login.php"><button>GO TO login  page</button></a>';
                
            }else if($num_rows==1){
                
                $q_data = mysqli_fetch_assoc($query_run);
                $user_id = $q_data['id'];
                $_SESSION['user']=$user_id;
                echo $_SESSION['user'];
                header('Location: demo.php');
                
            }
        }
        
    
    }else{
        echo '<br>you must give username<br>';
    }
}
?>
            
              </div>

</body>
</html>
