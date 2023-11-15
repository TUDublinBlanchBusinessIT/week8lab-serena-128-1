<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy.php");
$cp = new CarPolicy("1234",200);
$cp->setDateOfLastClaim("2010-01-01");
echo $cp->getTotalYearsNoClaims();
?>