<?php
  require_once 'Abstract/CircularShape.php';

  class DiskShape extends CircularShape {
    private $radius;

    function __construct($_radius) {
      echo(sprintf("Creating an Disk shape with a radius of %d.".PHP_EOL, $_radius));
      $this->radius = $_radius;

    }

    public function computePerimeter() {
      return $this->radius * M_PI * 2;
    }
    
    public function computeSurface() {
      return M_PI * pow($this->radius, 2);
    }

  }
?>