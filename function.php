<?php

function checklogin($con){
    if(isset($_SESSION['userid'])){
        $id = $_SESSION['userid'];
        $stm = "select * from users where userid = '$id'";
        $res = mysqli_query($con,$stm);
        if($res && mysqli_num_rows($res) > 0){
            $userdata = mysqli_fetch_assoc($res);
            return $userdata;
        }
    }
    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($len){
    $text="";
    if($len < 2){
        $len = 2;
    }
    $l = rand(1,$len);
    for ($i=0; $i < $l; $i++) { 
        # code...
        $text .= rand(0,9);
    }
    return $text;
}