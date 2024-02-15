<?php 
    class Product {
        private $description;
        private $price;

        public function __construct($description, $price) {
            $this->description = $description;
            $this->price = $price;
        }

        public function getDetails() {
            return "Description: {$this->description}<br>Price: {$this->price}";
        }
    }

    $product = new Product("Book", "35");
    echo $product->getDetails();
?>