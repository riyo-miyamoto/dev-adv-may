<?php

class feeManager{
    private $name;
    private $year;
    private $unit;
    private $lab;
    
   //setter
    public function setValues($name, $year,$unit, $lab){
        $this->name = $name;
        $this->year = $year;
        $this->unit = $unit;
        $this->lab = $lab;
    }
   
    public function calculateFee(){
        if($this->year == 1){
            if($this->lab == 1){
                return $this->unit * 550 + 3359;
            }
            else{
                return $this->unit * 550;
            }
        }
        elseif($this->year == 2){
            if($this->lab == 1){
                return $this->unit * 630 + 4000;
            }
            else{
                return $this->unit * 630;
            }
        }
        elseif($this->year == 3){
            if($this->lab == 1){
                return $this->unit * 470 + 2890;
            }
            else{
                return $this->unit * 470;
            }
        }
        elseif($this->year == 4){
            if($this->lab == 1){
                return $this->unit * 501 + 3555;
            }
            else{
                return $this->unit * 501;
            }
        }
    




    }
       
}


?>