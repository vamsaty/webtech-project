<?php
    require 'connect.inc.php';
    $user_ip = $_SERVER['REMOTE_ADDR'];
    
    function ip_exists($ip){
        require 'connect.inc.php';
        global $user_ip;//get the ip with the user ip
  //      echo '<br>'.$user_ip.'<br>';
        $query = "SELECT `ip` FROM `hit_ip` WHERE ip='$user_ip'";
        $query_run = mysqli_query($link,$query);
        $rows = mysqli_num_rows($query_run);
        if($rows==0){
            //addip($user_ip);
            return 0;
        }else{
            //echo '<br>already registered<br>';
            return 1;
        }

    }

    function addip($ip){
        require 'connect.inc.php';
        
        $query = "INSERT INTO `hit_ip` VALUES('$ip')";
        $query_run = mysqli_query($link,$query);
        
        
    }

    function update_count(){
        require 'connect.inc.php';
        $query = "SELECT `count` FROM `hits_counter`";
        
        if($query_run = mysqli_query($link,$query)){
            $count = mysqli_fetch_assoc($query_run);
            $count_inc = $count['count']+1;
            
            echo '<br>'.$count['count'].'<br>';
            
            $query_update = "UPDATE `hits_counter` SET `count` = $count_inc";
            
            if($query_update_run = mysqli_query($link,$query_update)){
                echo 'ok';
                
            }else{
                echo 'asdf';
            }
            
            
            
        }else{
            die(mysqli_error($link));
        }
        
    
    }


//"SELECT `...` FROM `...` WHERE `...` LIKE '%..'"//for anything in front and '..' later; similarly for '..%'
//'%..%' either side


  
if(!ip_exists($user_ip)){
    update_count();
    addip($user_ip);
}else{
    echo'<br>Already exists<br>';
}

  

?>