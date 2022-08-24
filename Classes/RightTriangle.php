<?php
  require_once 'Abstract/Triangle.php';

  class RightTriangle extends Triangle {
    private $a;
    private $b;
    private $h;

    function __construct($_a, $_b) {
      $this->a = $_a;
      $this->b = $_b;
      $this->h = $this->computeHypotenuse();
      echo(sprintf("Creating a Right Triangle shape with a side of %.02f and the other side of %.02f. The hypotenuse is equal to %.02f".PHP_EOL, $_a, $_b, $this->h));
    }

    private function computeHypotenuse() {
      return sqrt(pow($this->a, 2) + pow($this->b, 2));
    }

    public function computePerimeter() {
      return $this->h + $this->a + $this->b;
    }

    public function computeSurface() {
      return 1 / 2 * $this->a * $this->b;
    }
  }
?>