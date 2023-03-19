<?php

include 'lib/load.php';
$user = 'nikki';
$pass = 'nikki';
$result = user::login($user ,$pass);
if($result){
    echo "login success \n";
}else{
    echo "login failed";
}






?>