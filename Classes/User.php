<?php

    class User {
        public $name;
        public $lastname;
        public $email;
        public $eta;

        function __construct($_name, $_lastname, $_email, $_eta)
        {
            $this->name = $_name;
            $this->lastname = $_lastname;
            $this->email = $_email;
            $this->eta = $_eta;
        }

    }


?>