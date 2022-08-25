<?php
  require_once 'Abstract/Quadrilateral.php';

  // This class represents a Square Geometrical Shape.
  // $height is the length of the four sides of the square.
  class Square extends Quadrilateral {
    private $height;

    function __construct($_height) {
      echo(sprintf("Creating a Square shape height and width of %.02f.".PHP_EOL, $_height));
      $this->height = $_height;

    }

    public function computePerimeter() {
      return 4 * $this->height;
    }

    public function computeSurface() {
      return pow($this->height, 2);
    }

  }
?>