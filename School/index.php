<?php
require "School.php";
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
    <style>
   
    .label btn {
        display: none;
        background-color: green;
        padding: 10px 20px;
        
    }
    

</style>        

</head>
<body>
    
    <div class="row mt-5 p-2">
        <div class="col"></div>
        <div class="col-5">

            <form action="" method="post">

                <h1 class="text-center">School Activity</h1>

                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="">Year Level</label>
                <select name="year" id="year" class="form-control">
                    <option value="" name="year" hidden>select year</option>
                    <option value="1" name="year">1</option>
                    <option value="2" name="year">2</option>
                    <option value="3" name="year">3</option>
                    <option value="4" name="year">4</option>
                </select>

                <label for="">Number of Units</label>
                <input type="number" name="unit" id="unit" min="1" max="23" class="form-control">
                <br>

                <label for="radio" class="input-group " id="input-group">Lab Option</label>

                <label for="btn">With Lab</label>
                <input type="radio" class="btn btn-success" name="lab" value= 1>

                <label for="btn">No Lab</label>
                <input type="radio" class="btn btn-danger" name="lab" value= 0>
                
                <br>

                <input type="submit" class="submit btn btn-primary form-control mt-3" name="cal" value="Calculate">
                <div class="col"></div>

                <table class="table table-striped mt-3 border">
            <?php

            if (isset($_POST['cal'])) {
                $name = $_POST['name'];
                $year = $_POST['year'];
                $unit = $_POST['unit'];
                $lab = $_POST['lab'];

                $fee_manager = new FeeManager;
                $fee_manager->setValues($name, $year, $unit, $lab);
                $fee = $fee_manager->calculateFee();
            }

            ?>
                            

                    <tr>
                        <td>Name:</td>
                        <td>
                            <?php
                            echo $name;
                            ?>
                            
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Year Level:</td>
                        <td>
                            <?php
                            echo $year;
                            ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Number of Units:</td>
                        <td>
                            <?php
                            echo $unit;
                            ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Lab Option:</td>
                        <td>
                            <?php
                            if($unit == 1){
                                echo "With Lab";
                            }else{
                                echo "No Lab";
                            }
                            ?>
                           
                        </td>
                    </tr>
                    <tr class="text-danger">
                        <td>Total:</td>
                        <td>
                            <?php
                            echo $fee;
                            ?>
                           
                        </td>
                    </tr>
                </table>
        </div>
        <div class="col"></div>

    </div>
</body>

</html>
