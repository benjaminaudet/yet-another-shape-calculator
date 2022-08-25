<?php
  require_once 'Abstract/Triangle.php';

  // This class represents a General Triangle Geometrical Shape.
  // $a is the length of the first side of the triangle.
  // $b is the length of the second side of the triangle.
  // $c is the length of the third side of the triangle.
  class GeneralTriangle extends Triangle {
    private $a;
    private $b;
    private $c;

    function __construct($_a, $_b, $_c) {
      $this->a = $_a;
      $this->b = $_b;
      $this->c = $_c;
      echo(sprintf("Creating a General Triangle shape with first side of %.02f, second side of %.02f and third one of %.02f.".PHP_EOL, $_a, $_b, $_c));
    }

    public function computePerimeter() {
      return $this->a + $this->b + $this->c;
    }

    public function computeSurface() {
      $p = 1 / 2 * ($this->a + $this->b + $this->c);
      return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
  }
?>