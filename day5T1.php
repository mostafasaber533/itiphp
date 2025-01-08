<?php

class Author {
    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function toString() {
        return "Author[name={$this->name}, email={$this->email}, gender={$this->gender}]";
    }
}

class Book extends Author {
    private $bookName;
    private $price;
    private $qty;

    public function __construct($bookName, $authorName, $email, $gender, $price, $qty = 0) {
        parent::__construct($authorName, $email, $gender);
        $this->bookName = $bookName;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getBookName() {
        return $this->bookName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getQty() {
        return $this->qty;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function toString() {
        return "Book[name={$this->bookName}, " .
               "author=" . parent::toString() . ", " .
               "price={$this->price}, qty={$this->qty}]";
    }
}

// مثال على استخدام الكلاسات
$book = new Book("PHP Programming", "John Doe", "john@example.com", "M", 29.99, 100);
echo $book->toString() . "<br>";
echo "Author Name: " . $book->getName() . "<br>";
echo "Book Name: " . $book->getBookName() . "<br>";

// تغيير بيانات المؤلف باستخدام setters
$book->setName("Jane Doe");
$book->setEmail("jane@example.com");
echo "<br>After updating author info:<br>";
echo $book->toString() . "<br>";

?>