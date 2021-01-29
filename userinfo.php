<?php

$con = mysqli_connect('localhost','root');

if($con){
 echo "Connection Sussessful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, 'user');

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$mobile = $_POST['mobile'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$member = $_POST['member'];
$roomC = $_POST['roomC'];


$query = "insert into userdata (user,email,password,country,mobile,checkIn,checkOut,member,roomC)

values ('$user','$email','$password','$country','$mobile','$checkIn ','$checkOut','$member','$roomC')";

mysqli_query($con,$query );

header('location:index.php');

?>
