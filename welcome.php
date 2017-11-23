<!DOCTYPE>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo 'Welcome, '.$_SESSION['username'];
    }else{
        echo "Please login";
    }
?>
<html>
    <head>
        <title>
            
        </title>
    </head>
<body>
    
    <form method="post" action="unset.php">
        <input type="submit" value="logout"/>
    
    </form>
    
    </body>
</html>