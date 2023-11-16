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
    
    
    
    public function getTotalYearsNoClaims()
    {
         $currentDate = new DateTime();
         $lastDate= new DateTime($this->dateOfLastClaim);
         $interval = $currentDate->diff($lastDate);
         return $interval->format("%y");
    }



}
?>