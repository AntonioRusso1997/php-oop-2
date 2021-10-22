<?php
    require_once 'Classes/User.php';
    require_once 'Classes/PremiumUser.php';

    class PremiumUser extends User {
        public $plan; // Piano d'abbonamento es. Standard, Gold, Platinum.
        public $discount;

        function __construct($_name, $_lastname, $_email, $_eta, $_plan, $_discount)
        {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
            $this->eta = $_eta;
            $this->plan = $_plan;
            $this->discount = $_discount;
        }
    }    
?>