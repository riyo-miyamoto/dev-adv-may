<?
session_start();

include "../classes/User.php";

$user = new User;
 
$user_details = $user->getSpecificUser($_SESSION['user_id']);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="card w-50 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <h1 class="display-4 fw-bold text-center text-info">Profile</h1>
            </div>
            <div class="card-body">
                <img src="../assets/images/<?= $user_details['photo']?>?>" alt="<?= $user_details['photo']?>" class="card-img-top mb-2">

                <form action="../actions/profile.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-8">
                            <input type="file" name="photo" id="" class="form-control">
                        </div>
                        <div class="col-4 g-0">
                            <button type="submit" class="btn btn-info w-100">Upload</button>
                        </div>
                    </div>
                </form>

                <div class="row mb-3">
                    <h2 class="display-5 fw-bold"><?= $user_details['first_name'] . " " . $user_details['last_name']?></h2>
                    <h2 class="text-secondary">@<?= $user_details['username']?></h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>