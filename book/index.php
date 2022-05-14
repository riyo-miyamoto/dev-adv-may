<?php
require "book.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <form action="" method="post">
        <label for="Title">Title:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <br>
        <button type="submit" name="submit">Submit</button>



    </form>
    <?php
        if(isset($_POST['submit'])){
        $title= $_POST['title'];
        $price= $_POST['price'];

        $book = new Book;

        $book->setValues($title, $price);

        echo "Title:".$book->getTitle()."<br>";
        echo "Price:".$book->getPrice()."<br>";
        }
    ?>
</body>
</html>