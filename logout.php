<?php
    require 'core.php';
    session_destroy();
    
if(loggedin()){
    header('Location:demo.php');
}else{
    echo 'Your are logged out';
}

  ?>