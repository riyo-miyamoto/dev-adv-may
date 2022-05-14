<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      

</head>
<body>

<div class="container mt-5">
    <div class="card border-0 mx-auto w-25">
        <div class="card-header bg-white border-0">
            <h1 class="display-4 fw-bold text-primary text-center">LOGIN</h1>
        </div>
        <div class="card-body">
            <form action="../actions/login.php" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="">Username</label>
                        <input type="text" name="username" id="username " class="form-control " required>
                    </div>
                </div>
           
                <div class="row mb-3">
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password " class="form-control " required>
                    </div>
                </div>

                <div clas="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary text-center w-100">LOGIN</button>
                        <p class="text-center small mt-3"><a href="register.php"> Create an Account</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>