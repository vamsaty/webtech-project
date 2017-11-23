<?php

    require 'connect.inc.php';
    

?>
<form method="GET" action="ind.php">
    Choose a food type : 
    <select name="uh">
        <option value="u">Unhealthy</option>
        <option value="h">Healthy</option>
    </select><br/><br/>
    <input type="submit" value="GET"/>
    

</form>


<?php
/*
    if(isset($_GET['uh'])&&!empty($_GET['uh'])){
        $uh = strtolower($_GET['uh']);
        //die();
        if($uh == 'u' || $uh == 'h'){
        $query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC";

        //$query_run = mysqli_query($link, $query);

        if($query_run = mysqli_query($link, $query)){

            //echo '<br/>Query success.<br/>';
            //create an associated arrays for the rows

            if(mysqli_num_rows($query_run) != NULL){

                while($query_row = mysqli_fetch_assoc($query_run)){
                    //food_ column
                    $food = $query_row['food'];
                    //calories_column
                    $calories = $query_row['calories'];

                    echo $food.' has '.$calories.' calories<br/>';
                }

            }else{
                echo '<br/>No results found<br/>';
            }

        }else{

            echo mysqli_error();
            //echo '<br/>Query Failed';

        }
    }else{
            echo 'Must be u or h<br>';
        }
}
*/
?>

<form method="GET" action="">
Enter user to search : <input type="text" name="data"/><br><br>
    <input type="submit" value="search"/>
</form>

<?php 
    if(isset($_GET['data']) && !empty($_GET["data"])){
        $data = $_GET["data"];
        $query = "SELECT * FROM `users` WHERE `username` LIKE '%".$data."%'";
        if($query_run = mysqli_query($link,$query)){
            
            $num = mysqli_num_rows($query_run);
            if($num!=0)
                while($rows = mysqli_fetch_assoc($query_run)){
                    echo $rows['username'].'<br>';
                }
                
            else
                echo'not found';
        }else{
            echo 'failed to make query';
        }
        
        
    }else{
        echo 'err';
    }



?>

