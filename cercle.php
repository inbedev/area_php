<?php
class Cercle {
    public $radius= 0;

    //Method to set the dimensions:
    function setSize($r=0) {
       $this->radius=  $r;
    }

    //Method to calculate and return the area:
    function getArea() {
        return ((3.14 * $this->radius * $this->radius));
    }

    //Method to calculate and return the perimeter:
    function getPerimeter() {
        return (2 * 3.14 * $this->radius);
    }

    //Method to calculate and return the diameter:
    function getDiameter() {
        return (2 * $this->radius);
    }

    //Method to determine if the circle
    //is also an ellipse:
   
}//End of Cercle class.
?>