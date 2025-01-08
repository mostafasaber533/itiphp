<?php

trait CircleTrait {
    private $radius = 1.0;
    private $color = "red";
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
    
    public function toString() {
        return "Circle[radius={$this->radius},color={$this->color}]";
    }
}

class Cylinder {
    use CircleTrait;
    private $height = 1.0;
    
    public function __construct($radius = 1.0, $height = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->height = $height;
        $this->color = $color;
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function setHeight($height) {
        $this->height = $height;
    }
    
    public function getVolume() {
        return $this->getArea() * $this->height;
    }
}

$cylinder = new Cylinder(3, 4, "green");
echo "Cylinder radius: " . $cylinder->getRadius() . "<br>" ;
echo "Cylinder height: " . $cylinder->getHeight() . "<br>";
echo "Cylinder color: " . $cylinder->getColor() . "<br>";
echo "Cylinder area: " . $cylinder->getArea() . "<br>";
echo "Cylinder volume: " . $cylinder->getVolume() . "<br>";
echo $cylinder->toString()  ;
?>