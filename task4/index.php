<?php 

      
    class Animal {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function makeSound() {

            return "animal sound";
        }
        public function display($animal) {
            echo $animal->name . " says: " . $animal->makeSound() . PHP_EOL;
            
        }
    }

    class Dog extends Animal {
        public function makeSound() {
            return "Woof! Woof!";
        }
    }

    class Cat extends Animal {
        public function makeSound() {
            return "Meow!";
        }
    }

    class Cow extends Animal {
        public function makeSound() {
            return "Moo!";
        }
    }


    class Duck extends Animal {
        public function makeSound() {
            return "Quack! Quack!";
        }
    }

        

    $animal=new Animal(''); 
    $dog = new Dog("Dogs");
    $cat = new Cat("Cats");
    $cow = new Cow("Cows");
    $duck = new Duck("Ducks");

    $animal->display($dog);  
    $animal->display($cat);  
    $animal->display($cow);  
    $animal->display($duck);


?>