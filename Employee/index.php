<?php
require "employee.php";
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
    
    <div class="container mt-5">
            <form action="" method="post">

                <h1 class="text-center">Employee Activity</h1>

                <label for="" class="mt-2">Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="" class="mt-2">Civil Status</label>
                <select name="cvl_status" id="cvl_status" class="form-control">
                    <option value="" name="cvl_status" hidden>Select your Civil Status</option>
                    <option value="single" name="single">Single</option>
                    <option value="married" name="married">Married</option>
                    
                </select>

                <label for="" class="mt-2">Position</label>
                <select name="position" id="position" class="form-control">
                    <option value="status" name="status" hidden>Select your Position</option>
                    <option value="staff" name="staff">Staff</option>
                    <option value="admin" name="admin">Admin</option>
                    
                </select>

                <label for="" class="mt-2">Employment Status</label>
                <select name="emp_status" id="emp_status" class="form-control">
                    <option value="emp_status" name="emp_status" hidden>Select your Employment Status</option>
                    <option value="constractual" name="constractual">Constractual</option>
                    <option value="probationary" name="probationary">Probationary</option>
                    <option value="regular" name="regular">Regular</option>
                    
                </select>

                <label for="" class="mt-2">Number of Hours Worked</label>
                <input type="number" name="workhour" id="workhour" class="form-control">


               <input type="submit" class="submit btn btn-primary form-control mt-3" name="submit" value="Submit">

            </form>
                
            <?php
        

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $cvl_status = $_POST['cvl_status'];
                $position = $_POST['position'];
                $emp_status = $_POST['emp_status'];
                $workhour = $_POST['workhour'];

                $incomeCalucurater = new incomeCalucurater;
                $incomeCalucurater->setValues($name, $cvl_status, $position, $emp_status, $workhour);
                $grossIncome = $incomeCalucurater->calGrossIncome();
                $netIncome = $incomeCalucurater->calNetIncome();
                $taxDuduction= $incomeCalucurater->caltaxDeduction();
            ?>
                <table class="table table-striped mt-3 border">
                  <tr>
                        <td>Name:</td>
                        <td>
                            <?php
                            echo $name;
                            ?>
                            
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Civil Status:</td>
                        <td>
                            <?php
                            echo $cvl_status;
                            ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Position:</td>
                        <td>
                            <?php
                            echo $position;
                            ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Employment Status:</td>
                        <td>
                            <?php
                            echo $emp_status;
                            ?>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>Number of Hours Worked:</td>
                        <td>
                            <?php
                            echo $workhour;
                            ?>
                           
                        </th>
                    </tr>
                    <tr>
                        <td>Gross Income:</td>
                        <td>
                            <?php
                            echo "$".$grossIncome;
                            ?>
                           
                        </th>
                    </tr>
                    <tr>
                        <td>Helthcare Deduction:</td>
                        <td>
                            <?php
                            if($cvl_status ="single"){
                                echo  "$"."-200";            
                            }else{
                                echo  "$"."-75";
                            }
                            ?>
                           
                        </th>
                    </tr>
                    <tr>
                        <td>Tax Deduction:</td>
                        <td>
                            <?php
                            echo  "$"."-".$taxDuduction;
                            ?>
                           
                        </th>
                    </tr>
                    <tr>
                        <td>Net Income:</td>
                        <td>
                            <?php
                            echo  "$".$netIncome;
                            ?>
                           
                        </th>
                    </tr>
                </table>
        <?php
            }
        ?>
    </div>
</body>

</html>
