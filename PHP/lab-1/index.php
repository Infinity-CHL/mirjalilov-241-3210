<?php
    class Cat {
        private $name;
        public $color;
        public $weight;

        function __construct(string $name, string $color, int $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        function getName() {
            return $this->name;
        }
    }

    $cat = new Cat("Barsik", "black", 3);
    echo $cat->getName()."<br>";
    // var_dump($cat);