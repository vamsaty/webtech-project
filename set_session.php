<?php 
                  
    if(isset($_POST['pass']) && isset($_POST['user'])){
            session_start();          
            $pass = $_POST['pass'];
            $user = $_POST['user'];    
            $_SESSION['username'] = $user;
            $_SESSION['pass'] = $pass;
            
            $warn = "123123";
    }
                  
    

?>
<html>
    <head><title>
        asdf</title></head>
    <body>
<script>
    window.open("welcome.php");
    window.close();
</script>
    </body>
    </html>