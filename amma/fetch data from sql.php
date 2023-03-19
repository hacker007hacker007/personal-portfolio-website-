<pre><?php 

$conn = mysqli_connect("mysql.selfmade.ninja:3306" ,"hacker" ,"hacker007007007" ,"hacker_auth");

if(!$conn)
{
   die("connection failed :".mysqli_connect_error());
}else{
    echo "conection success \n";
}

$query = "select id,mail,password,name,mobile from auth";
$result = mysqli_query($conn , $query);
$num = mysqli_num_rows($result);
if($num>0){
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}
}else{
    echo('record not found');
}

?></pre>