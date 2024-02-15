<?php 
    class Fabricante {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    class Product {
        private $description;
        private $price;
        private $fabricante;

        public function __construct($description, $price, Fabricante $fabricante) {
            $this->description = $description;
            $this->price = $price;
            $this->fabricante = $fabricante;
        }

        public function getDetails() {
            return "Description: {$this->description}<br>Price: {$this->price}<br>Fabricante: {$this->fabricante->getName()}";
        }
    }
    $fabricante1 = new Fabricante('Editora B');
    $product = new Product("Book", "35", $fabricante1);
    echo $product->getDetails();
?>