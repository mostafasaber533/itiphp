<!--#<?php 
/* 
__set(),__get(),__call()  ==> withcode */
/* 
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>


<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html> */ 

#<?php

/*__set(),__get(),__call()  ==> withcode */
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context');


?>




