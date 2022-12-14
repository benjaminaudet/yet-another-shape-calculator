<?php
  require_once 'Abstract/Quadrilateral.php';

  // This class represents a Rectangle Geometrical Shape.
  // $height is the length of two sides of the rectangle.
  // $b is the length of the two other sides of the rectangle.
  class Rectangle extends Quadrilateral {
    private $height;
    private $width;

    function __construct($_height, $_width) {
      echo(sprintf("Creating a Rectangle shape with a height of %.02f and a width of %.02f.".PHP_EOL, $_height, $_width));
      $this->height = $_height;
      $this->width = $_width;
    }

    public function computePerimeter() {
      return 2 * ($this->height + $this->width);
    }

    public function computeSurface() {
      return $this->height * $this->width;
    }
  }
?>