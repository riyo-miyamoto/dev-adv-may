
<?php

class FareManager{
    private $dis;
    private $fare = 8;
    private $age;
   
    //setter
    public function setValues($dis, $age){
        $this->dis= $dis;
        $this->age = $age;
    }
    //getter
    // public function getDis(){
    //      return $this->dis;
    // }
   public function calculateFare(){
       if($this->age >= 60){
        if($this->dis <= 4){
            return $this->fare - ($this->fare * 0.20);
        }else{
            $this->dis -= 4;
            $fare = $this->fare + $this->dis;
            return $fare - ($this->fare * 0.20);
        }
       }else{
        if($this->dis <= 4){
            return $this->fare;
        }else{
            $this->dis -= 4;
            $fare = $this->fare + $this->dis;
            return $fare;
        }
       }
   }
}

?>