<?php

include "../classes/User.php ";

$user = new User;

$user_id =$_POST["user_id"];
$first_name =$_POST["first_name"];
$last_name =$_POST["last_name"];
$username =$_POST["username"];


if(empty($_POST['password'])){
    $password = $_POST['old_password'];
}else{
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$user->updateUser($user_id, $first_name, $last_name, $username, $password);

?>