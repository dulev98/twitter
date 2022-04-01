<?php 
include 'connect.php';

$login_user_name = $_POST['login_user_name'];
$login_password = $_POST['login_password'];

$query = mysqli_query($con,"SELECT * FROM `users` WHERE user_name='$login_user_name' AND password = '$login_password'");
$num = mysqli_num_rows($query);
if(!$login_user_name && !$password){
    echo "insert data";
}else if(!$login_user_name){
    echo "insert uname";
}else if(!$login_password){
    echo "insert password";
}else if($num == 0){
    echo "incorrect";
}else{
    echo "success";
}
?>