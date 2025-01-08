<?php

abstract class Person {
    protected $name;
    protected $address;
    
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getAddress(): string {
        return $this->address;
    }
    
    public function setAddress($address): void {
        $this->address = $address;
    }
    
    abstract public function toString(): string;
}

class Student extends Person {
    private $program;
    private $year;
    private $fee;
    
    public function __construct($name, $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }
    
    public function getProgram(): string {
        return $this->program;
    }
    
    public function setProgram($program): void {
        $this->program = $program;
    }
    
    public function getYear(): int {
        return $this->year;
    }
    
    public function setYear($year): void {
        $this->year = $year;
    }
    
    public function getFee(): float {
        return $this->fee;
    }
    
    public function setFee($fee): void {
        $this->fee = $fee;
    }
    
    public function toString(): string {
        return "Student[Person[name={$this->name}, address={$this->address}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}

class Staff extends Person {
    private $school;
    private $pay;
    
    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }
    
    public function getSchool(): string {
        return $this->school;
    }
    
    public function setSchool($school): void {
        $this->school = $school;
    }
    
    public function getPay(): float {
        return $this->pay;
    }
    
    public function setPay($pay): void {
        $this->pay = $pay;
    }
    
    public function toString(): string {
        return "Staff[Person[name={$this->name}, address={$this->address}], school={$this->school}, pay={$this->pay}]";
    }
}



$student = new Student("mostafa", "mnof", "FUCS", 2024, 50000.0);

$staff = new Staff("Abdallah", "mnof", "CS", 15000.0);

 
echo "Student: ", "<br>";
echo $student->toString() . "<br>";


echo "Staff:", "<br>";
echo $staff->toString() . "<br>";

echo "Name : " . $student->getName()."<br>";
echo "Program : " . $student->getProgram()."<br>";

echo "Name : " . $staff->getName()."<br>";
echo "School : " . $staff->getSchool()."<br>";

?>