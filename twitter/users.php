<?php

include 'connect.php';

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$user_name= $_POST['user_name'];
$email= $_POST['email'];
$password= $_POST['password'];

$query = mysqli_query($con, "SELECT * FROM `users` WHERE user_name ='$user_name'");
$query2 = mysqli_query($con, "SELECT email FROM `users` WHERE email ='$email'");
$num = mysqli_num_rows($query);
$num2 = mysqli_num_rows($query2);
if(!$first_name && !$last_name && !$user_name && !$email && !$password){
    echo "insert all data";
}else if(!$first_name){
    echo "insert fname";
}else if(!$last_name){
    echo "insert lname";
}else if(!$user_name){
    echo "insert uname";
}else if($num == 1){
    echo "check uname";
}else if(!$email){
    echo "insert email";
}else if($num2 == 1){
    echo "check email";
}else if(!$password){
    echo "insert password";
}else{
    $sql="INSERT INTO `users`(`first_name`, `last_name`,  `user_name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$user_name','$email','$password')";
    $result=mysqli_query($con,$sql);
}

?>