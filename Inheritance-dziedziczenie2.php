<?php

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}
// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red"); 
$strawberry->message(); // 0K. message() is public
$strawberry->intro(); // ERROR. intro() is protected