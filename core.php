<?php 
    ob_start();
    session_start();

    $current_file = $_SERVER['SCRIPT_FILENAME'];

    function loggedin(){
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
            return true;
        }else{
            return false;
        }
    }

?>