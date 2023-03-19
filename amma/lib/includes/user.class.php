<?php

class user
{
    public static function signup($email, $password, $namee, $mobilee)
    {
       
        $password = password_hash($password, PASSWORD_DEFAULT);
        $conn = data::dataconnection();
        $sql = "INSERT INTO `auth` (`mail`, `password`, `name`, `mobile`, `active`, `block`)
        VALUES ('$email', '$password', '$namee', '$mobilee', '0', '1');";
        $result = false;
        try {
            return $conn->query($sql);
        } catch (Exception $e) {
            echo " Error; " . $sql . "<br>" . $conn->$result;
            echo $e ;
            return false;
        }
    }
 
    public static function login($user ,$pass)
    {
       
    
        $conn = data::dataconnection();
        $sql = "select * from auth where name = '$user'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($pass, $row['password'])){
                return $row ;
            }else {
                echo "not same password";
            }
        }else{
            echo "\nrow its zero<br> \n";
        }
    }


}
?>