<?php
 class Book{

    /*** PROPERTIES ***/
    private $title;
    Private $price;
    
    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
    public function displayValues(){
        echo "Title:" . $this->title."<br>";
        echo "Price:" . $this->price."<br>";
    }
    
    public function returnValues(){
        return["title"=> $this->title, "price" => $this->price];
    }


}
?>