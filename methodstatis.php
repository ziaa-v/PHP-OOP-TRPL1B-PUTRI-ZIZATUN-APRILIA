<?php
class greeting {
  // static method
  public static function welcome() {
    echo "
    Hello World!";
  }

  // non-static method
  public function __construct() {
    self::welcome();
  }
}

new greeting();

// Call static method directly
greeting::welcome();

class calc {
  // static method
  public static function sum($x, $y) {
    return $x * $y;
  }
}

// Call static method
$res = calc::sum(6, 4);
echo $res;

class A {
  public static function welcome() {
    echo "
    Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();

class domain {
  protected static function getWebsiteName() {
    return "
    W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>