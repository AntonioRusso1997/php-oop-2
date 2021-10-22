<?php

    class Product {
        public $name;
        public $description;
        public $brand;
        public $serialNumber;
        public $category;
        public $price;
        public $weight;

        function __construct($_name, $_description, $_brand, $_serialNumber, $_category, $_price, $_weight)
        {
            $this->name = $_name;
            $this->description = $_description;
            $this->brand = $_brand;
            $this->serialNumber = $_serialNumber;
            $this->category = $_category;
            $this->price = $_price;
            $this->weight = $_weight;
        }
    }
?>