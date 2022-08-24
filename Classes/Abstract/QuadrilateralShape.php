<?php
  include '../Interfaces/IShape.php';

  abstract class QuadrilateralShape implements IShape {
    private $height;
    private $width;

    abstract public function computePerimeter();
    abstract public function computeSurface();
  }
?>