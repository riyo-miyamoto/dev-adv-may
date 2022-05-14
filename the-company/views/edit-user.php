<?php

session_start();

include "../classes/User.php";

$user = new User;

$user_details = $user->getSpecificUser($_GET["user_id"]);

// print_r($user_details);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">
            <h5 class="fw-bold ms-3">The Company</h5>
        </a>

        <div class="ms-auto me-3">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="profile.php" class="nav-link text-info"><?= $_SESSION['username']?></a></li>
                <li class="nav-item"><a href="../actions/logout.php" class="nav-link"><i class="fa-solid fa-user-xmark text-danger"></i></a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card w-50 mx-auto border-0">
            <div class="card-header bg-white border-0">
                <h1 class="display-4 fw-bold text-warning text-center">Edit User</h1>
            </div>
            <div class="card-body">
                <form action="../actions/edit-user.php" method="post">
                    <input type="hidden" name="user_id" value="<?= $user_details['id']?>">

                    <div class="row mb-3">
                        <div class="col">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" value="<?= $user_details['first_name']?>">
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Last name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $user_details['last_name']?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $user_details['username']?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <input type="hidden" name="old_password" value="<?= $user_details['password']?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning mb-2 w-100">Update</button>
                    <a href="dashboard.php" class="btn btn-danger w-100">Cancel</a>

                </form>
            </div>
        </div>
    </div>

</body>
</html>