<?php
    $server = "localhost";
    $username = "root";
    $password ="";
    $db = "assignment";

    $con = mysqli_connect($server,$username,$password,$db);
    if($con)
    {
       // echo "Connection Successfull";
    }
    else{
        echo "Connection unsuccessfull";
    }


?>