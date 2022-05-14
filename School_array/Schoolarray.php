<?php

class feeCalucurater{
    private $name;
    private $year;
    private $unit;
    private $lab;

    private $calUnit;
    private $calLab;
    
   //setter
    public function setValues($name, $year,$unit, $lab){
        $this->name = $name;
        $this->year = $year;
        $this->unit = $unit;
        $this->lab = $lab;
        //array[scoolyear => number of units]
        $this->calUnit =[1=>550, 2=>630, 3=>470, 4=>501];

        //array[schoolyear => lab fee]
        $this->calLab =[1=>3359, 2=>4000, 3=>2890, 4=>3555];
    }
    
    public function calculateFee(){
        $basefee = $this->calUnit[$this->year]* $this->unit;
        if($this->lab){
            $basefee = $basefee +  $this->calLab[$this->year];
        }
        
    return $basefee;

}
       
}


?>