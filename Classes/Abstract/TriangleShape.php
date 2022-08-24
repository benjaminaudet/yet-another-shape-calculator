<?php
  include 'Interfaces/IShape.php';

  abstract class TriangleShape implements IShape {
    private $a;
    private $b;

    abstract public function computePerimeter();
    abstract public function computeSurface();
  }
?>