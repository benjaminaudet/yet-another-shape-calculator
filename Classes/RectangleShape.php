<?php
  require_once 'Abstract/QuadrilateralShape.php';

  class RectangleShape extends QuadrilateralShape {
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