<?php
  require_once 'Interfaces/IShape.php';

  abstract class Shape implements IShape {
    abstract public function computePerimeter();
    abstract public function computeSurface();
  
    public function dump() {
      echo(sprintf("The perimeter of %s is %d".PHP_EOL, get_class($this), $this->computePerimeter()));
      echo(sprintf("The surface of %s is %d".PHP_EOL, get_class($this), $this->computeSurface()));
    }
  }
?>