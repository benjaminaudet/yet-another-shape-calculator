<?php
  require_once 'Classes/AnnulusShape.php';
  require_once 'Classes/DiskShape.php';
  require_once 'Classes/SquareShape.php';
  require_once 'Classes/RectangleShape.php';
  require_once 'Classes/RightTriangleShape.php';
  require_once 'Classes/IsoscelesTriangleShape.php';
  require_once 'Classes/GeneralTriangleShape.php';

  $annulus = new AnnulusShape(5, 3);
  $annulus->dump();
  
  $disk = new DiskShape(5);
  $disk->dump();

  $square = new SquareShape(5);
  $square->dump();

  $rectangle = new RectangleShape(5, 4);
  $rectangle->dump();

  $rightTriangle = new RightTriangleShape(12, 8);
  $rightTriangle->dump();

  $isoscelesTriangleShape = new IsoscelesTriangleShape(12, 8);
  $isoscelesTriangleShape->dump();

  $generalTriangleShape = new GeneralTriangleShape(12, 8, 5);
  $generalTriangleShape->dump();
?>