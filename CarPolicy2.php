<?php
class CarPolicy
{
    private $policyNumber="";
    private $yearlyPremium=0.0;
    private $dateOfLastClaim="";
    
    public function __construct($pn,$yp)
    {
        $this->policyNumber=$pn;
        $this->yearlyPremium=$yp;
    
    }
    
    public function setDateOfLastClaim($dolc)
    {
        $this->dateOfLastClaim=$dolc;
    }
    
    public function getDiscount()
    {
        $discount=0;
        $ync = $this->getTotalYearsNoClaim();
        if (($ync>=3)&&($ync<=5)) {
            $discount=10;
            
        }
        else if ($ync>5) {
            $discount=15;
        }
        return $discount;
       
    
    } 
    
    public function getDiscountedPremium()
    {
        $discPct= $this->getDiscount();
        $discAmount = ($this->yearlyPremium/100)*$discPct;
        return $discAmount;
    }
    
    public function getTotalYearsNoClaim()
    {    
        $currentDate = new DateTime();
        $lastDate= new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format ("%y");
    
    
    }
    
       

}
?>