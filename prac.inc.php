<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $con_error = 'Could not connect';
    $db = 'a_database';

    $link = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
    $db_con = mysqli_select_db($link,$db);

    if( $link){
        if($db_con){
            echo 'OK';
        }
    }
        
         


    




?>