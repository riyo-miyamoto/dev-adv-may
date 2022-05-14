<?php
 class Book{

    /*** PROPERTIES ***/
    private $title;
    Private $price;
    public $author;

    // $this->author;
    //no need for the $ mark

    /*** METHODS ***/
    // MULTIPLE SETTERS
    public function setTitle($new_title){
        $this->title = $new_title;
    }
    public function setPrice($new_price){
        $this->price = $new_price;
    }

    //SINGLE SETTER
    public function setValues($new_title,$new_price){
       $this->title= $new_title;
       $this->price= $new_price;
    }
   
    //GETTERS
    public function getTitle(){
         return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }
    
    private function displayValues(){
       echo "Title;".$this->title."<br>";
       echo "Price;".$this->price."<br>";
    } 
}

// /*** INSTANTIATION OF A CLASS (OBJECT) ***/

// $web_development = new Book;
// // $web_development is an instance of the class Book
// // we can no access the properties and methods of the class Book using the $web_developpement object.

// /*** ACCESSING THE PUBLIC METHODS ***/
// $web_development->setTitle("Web Development");
// $web_development->setPrice("500");

// echo $web_development->getTitle(). "<br>";
// echo $web_development->getPrice(). "<br>";

// /*** ACCESSING A PUBLIC PROPERTY ***/
// $web_development->author =" John";
// echo $web_development->author. "<br>";

// /***---------------------------------***/
// $web_design = new Book;

// $web_design->setValues("Web Design", 1000);

// echo $web_design->getTitle()."<br>";
// echo $web_design->getPrice()."<br>";

// $web_design->displayValues();  ERROR: because function displayValues() is a private function

?>