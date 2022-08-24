<?php
  require_once 'Interfaces/IShape.php';

  abstract class CircularShape implements IShape {
    private $radius;

    abstract public function computePerimeter();
    abstract public function computeSurface();
  }
?>