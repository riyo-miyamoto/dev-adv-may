<?php

class incomeCalucurater{
    private $name;
    private $cvl_status;
    private $position;
    private $emp_status;
    private $workhour;
    private $grossIncome;
    private $regularIncome;
   

    
   //setter
    public function setValues($name, $cvl_status, $position, $emp_status, $workhour){
        $this->name = $name;
        $this->cvl_status = $cvl_status;
        $this->position = $position;
        $this->emp_status = $emp_status;
        $this->workhour = $workhour;
        
       $this->regularIncome =[
           "staff" => array("constractual"=>300, "probationary"=>350, "regular"=>400),
            "admin" => array("constractual"=>350, "probationary"=>400, "regular"=>500)
        ];
       
       $this->additionalIncome =[
           "staff" => array("constractual"=>10, "probationary"=>25, "regular"=>30),
            "admin" => array("constractual"=>15, "probationary"=>30, "regular"=>40)
        ];                     
    }
   
    //to get the Gross Income
    public function calGrossIncome(){
    if($this->workhour <= 40 ){
        $this->grossIncome = $this->regularIncome[$this->position][$this->emp_status] * $this->workhour;
        }
        else{
            $this->grossIncome = ($this->regularIncome[$this->position][$this->emp_status] * (40/8)) + ($this->additionalIncome[$this->position][$this->emp_status] * ($this->workhour - 40));
        }
        return $this->grossIncome;
        
    }

    //to calcurate the deduction
    public function calNetIncome(){
    if($this->cvl_status = "single"){
        if($this->grossIncome >= 1000 ){
            $netIncome = $this->grossIncome - 200 - (0.05 * $this->grossIncome);
            $taxDuduction= 0.05 * $this->grossIncome;

        }else{
            $netIncome = $this->grossIncome - 200 ;
           
        }
    }
    
    elseif($this->cvl_status = "married"){
        if($this->grossIncome >= 1000 ){
            $netIncome = $this->grossIncome - 75 - (0.03 * $this->grossIncome);
            $taxDuduction= 0.03 * $this->grossIncome;
        }else{
            $netIncome = $this->grossIncome - 75;
            
        }
    }
    return $netIncome;
    
    }
    public function caltaxDeduction(){
        if($this->cvl_status = "single"){
            if($this->grossIncome >= 1000 ){
                $taxDuduction= 0.05 * $this->grossIncome;
            }else{
                $taxDuduction = 0;
            }

        }
        elseif($this->cvl_status = "married"){
            if($this->grossIncome >= 1000 ){
                $taxDuduction= 0.03 * $this->grossIncome;
            }else{
                $taxDuduction = 0;
            }
                
            
        }
        return $taxDuduction;
        
        }

   

}
       


?>