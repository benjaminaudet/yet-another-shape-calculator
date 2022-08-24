<?php
  require_once 'Abstract/Quadrilateral.php';

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