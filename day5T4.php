<?php

interface Shape {
    public function getColor(): string;
    public function setColor(string $color): void;
    public function isFilled(): bool;
    public function setFilled(bool $filled): void;
    public function toString(): string;
}

class Circle implements Shape {
    private string $color = "red";
    private bool $filled = true;
    private float $radius = 1.0;
    
    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }
    
    public function getRadius(): float {
        return $this->radius;
    }
    
    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }
    
    public function getColor(): string {
        return $this->color;
    }
    
    public function setColor(string $color): void {
        $this->color = $color;
    }
    
    public function isFilled(): bool {
        return $this->filled;
    }
    
    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }
    
    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
    
    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }
    
    public function toString(): string {
        return "Circle[Shape[color={$this->color},filled={$this->filled}],radius={$this->radius}]";
    }
}

class Rectangle implements Shape {
    private string $color = "red";
    private bool $filled = true;
    private float $width = 1.0;
    private float $length = 1.0;
    
    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        $this->width = $width;
        $this->length = $length;
        $this->color = $color;
        $this->filled = $filled;
    }
    
    public function getWidth(): float {
        return $this->width;
    }
    
    public function setWidth(float $width): void {
        $this->width = $width;
    }
    
    public function getLength(): float {
        return $this->length;
    }
    
    public function setLength(float $length): void {
        $this->length = $length;
    }
    
    public function getColor(): string {
        return $this->color;
    }
    
    public function setColor(string $color): void {
        $this->color = $color;
    }
    
    public function isFilled(): bool {
        return $this->filled;
    }
    
    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }
    
    public function getArea(): float {
        return $this->width * $this->length;
    }
    
    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }
    
    public function toString(): string {
        return "Rectangle[Shape[color={$this->color},filled={$this->filled}],width={$this->width},length={$this->length}]";
    }
}

class Square extends Rectangle {
    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }
    
    public function getSide(): float {
        return $this->getWidth();
    }
    
    public function setSide(float $side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }
    
    public function setWidth(float $side): void {
        parent::setWidth($side);
        parent::setLength($side);
    }
    
    public function setLength(float $side): void {
        parent::setWidth($side);
        parent::setLength($side);
    }
    
    public function toString(): string {
        return "Square[Rectangle[Shape[color={$this->getColor()},filled={$this->isFilled()}],width={$this->getWidth()},length={$this->getLength()}]]";
    }
}



$circle = new Circle(5.0, "blue", true);
echo "Circle: " . $circle->toString() . "<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Perimeter: " . $circle->getPerimeter() . "<br><br>";

$rectangle = new Rectangle(4.0, 6.0, "green", false);
echo "Rectangle: " . $rectangle->toString() . "<br>";
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br><br>";

$square = new Square(3.0, "red", true);
echo "Square: " . $square->toString() . "<br>";
echo "Area: " . $square->getArea() . "<br>";
echo "Perimeter: " . $square->getPerimeter() . "<br><br>";








?>