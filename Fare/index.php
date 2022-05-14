<?php
  require "fare.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="row mt-5 p-2">
    <div class="col"></div>
    <div class="col-5">

    <form action="" method="post">

    <label for="" >Distance</label>
    <input type="number" name="dis" id="dis" class="form-control" >
    </div>
    <div class="col-5">

    <label for="">Age</label>
    <input type="number" name="age" id="age" class="form-control">
    </div>
    <div class="col"></div>
   
</div>
<div class="row m-2 p-2">
    <div class="col"></div>
<div class="col-10 ">
    <input type="submit" value="submit"name="submit" class="form-control my-5 btn btn-info">

<?php

if(isset($_POST['submit'])){
    $dis = $_POST['dis'];
    $age = $_POST['age'];

    $fare_manager = new FareManager;
    $fare_manager->setValues($dis, $age);
    $fare = $fare_manager->calculateFare();

    // if($age < 60){
        echo "<h2>Price is:</h2>". "<h2 class=text-danger> $ ".$fare."</h2>";
    // }else{
       //echo "<h2>Price is:</h2>". "<h2 class=text-danger> $ ".$fare."</h2>";    
//}
}
?>

    </div>
    </form>
    <div class="col"></div>
</div>


</body>
</html>
