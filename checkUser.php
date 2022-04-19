<?php
include "config.php";

    $email = mysqli_real_escape_string($con,$_POST['firstname']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

if ($email != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from users where email='".$email."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['email'] = $email;
        echo 1;
    }else{
        echo 0;
    }

}