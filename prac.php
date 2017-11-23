<!DOCTYPE>
<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $con_error = "Could not connect";
    $db = 'a_database';
    
if(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass)){
        if(@mysqli_select_db($db)){
                echo 'OK';
        }else{
            echo 'n';
        }
}else{
    echo 'N';
}

    




?>