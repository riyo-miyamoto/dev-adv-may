<?php
session_start();

include_once "..//classes/User.php";

$user_id =$_SESSION['user_id'];
$image_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

$user = new User;
$user->uploadPhoto($user_id, $image_name, $tmp_name);

?>