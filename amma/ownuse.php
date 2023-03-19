<?php 

include 'lib/load.php';
$user = 'hacker';
$pass = 'hacker';
$result = null ;
// if (Session::get('is_loggin')){
//     $userdata = Session::get('username');
//     printf("welcome back $userdata[user]");
//     $result = $userdata ; 
// }else {
//     print("you are not allow plz login");
//     $result = user::login($user , $pass);
// }
// if($result){
//     echo "login success $result[user]";
//     Session::set('is_loggin', true);
//     Session::set('username', $result);
// }else{
//     echo "login failed";
// }

 if(session::get("santhosh")){
    $data = session::get("username");
    printf("welcome back $userdata[name]");
    $result = $userdata ;
 }else{
    printf("please login this page");
    $result = user::login($user , $pass);
   if($result){
    session::set('santhosh' , true);
    session::set('username' , $result);
   }else {
    echo "login failed";
   }
 }

 




?>