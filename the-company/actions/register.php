<?php
    include "../classes/User.php";

    // COLLECT THE DATA

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//CREATE AN OBJECT
$user =new User;

//CALL THE METHOD

$user->createUser($first_name, $last_name, $username, $password);




?>