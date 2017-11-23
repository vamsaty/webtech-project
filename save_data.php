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
require 'core.php';
function search_username($user){
    require 'connect.inc.php';
    $query = "SELECT `*` FROM `users` WHERE `username`='$user'";
      if($query_run = mysqli_query($link,$query)){                             
          $rows = mysqli_num_rows($query_run);
          if($rows!=0){
            while($data = mysqli_fetch_row($query)){
                echo data.'<br>';
            }
          }else{
              return false;
          }
              
          

      }
    
}
        if(loggedin()){

		
				$N = $_POST['firstname'];
				$C = $_POST['subject'];
				$fp = fopen("feedback.txt","a+") or die("unable to open file");
				fwrite($fp,"name:");
				fwrite($fp,$N);
				fwrite($fp,"\n");
				fwrite($fp,"\n");
				fwrite($fp,"subject :");
				fwrite($fp,$C);
				fwrite($fp,"\n");
				fwrite($fp,"\n");
				fwrite($fp,"\n");
				fclose($fp);
				               

			   
            echo '<h1>SUCCESSFULLY REGISTERED</h1>
            <br><p>Thank you for the feedback</p>
            <a href="demo.php"><button>HOME</button></a>';
               				  
            
            
        }else{
            echo '<h1>NOT LOGGED IN</h1><br><br><br><br>
                <a href="login.php"><button>GO TO login  page</button></a>';
        }
            
    

?>
            
            
            </div>

</body>
</html>