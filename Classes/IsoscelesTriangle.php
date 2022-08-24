<?php
  require_once 'Abstract/Triangle.php';

  class IsoscelesTriangle extends Triangle {
    private $a;
    private $b;

    function __construct($_a, $_b) {
      $this->a = $_a;
      $this->b = $_b;
      echo(sprintf("Creating a Isosceles Triangle shape with two sides of %.02f and the base side of %.02f.".PHP_EOL, $_a, $_b));
    }

    public function computePerimeter() {
      return $this->a + $this->a + $this->b;
    }

    public function computeSurface() {
      return ($this->b * (sqrt(pow($this->a, 2) - (pow($this->b, 2) / 4)))) / 2;
    }
  }
?>