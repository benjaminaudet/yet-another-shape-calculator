<?php
  require_once 'Abstract/CircularShape.php';

  class AnnulusShape extends CircularShape {
    private $radius;
    private $innerRadius;

    function __construct($_radius, $_innerRadius) {
      if ($_innerRadius > $_radius) {
        throw new ErrorException("You can't create an Annulus shape with an inner circle bigger than the outer circle.");
      }
      echo(sprintf("Creating an Annulus shape with an outer circle of radius of %.02f and an inner circle of radius of %.02f.".PHP_EOL, $_radius, $_innerRadius));
      $this->radius = $_radius;
      $this->innerRadius = $_innerRadius;

    }

    public function computePerimeter() {
      return ($this->radius + $this->innerRadius) * M_PI * 2;
    }

    public function computeSurface() {
      return M_PI * (pow($this->radius, 2) - pow($this->innerRadius, 2));
    }
  }
?>