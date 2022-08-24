<?php
  require_once 'Classes/Annulus.php';
  require_once 'Classes/Disk.php';
  require_once 'Classes/Square.php';
  require_once 'Classes/Rectangle.php';
  require_once 'Classes/RightTriangle.php';
  require_once 'Classes/IsoscelesTriangle.php';
  require_once 'Classes/GeneralTriangle.php';

  $annulus = new Annulus(5, 3);
  $annulus->dump();
  
  $disk = new Disk(5);
  $disk->dump();

  $square = new Square(5);
  $square->dump();

  $rectangle = new Rectangle(5, 4);
  $rectangle->dump();

  $rightTriangle = new RightTriangle(12, 8);
  $rightTriangle->dump();

  $isoscelesTriangleShape = new IsoscelesTriangle(12, 8);
  $isoscelesTriangleShape->dump();

  $generalTriangleShape = new GeneralTriangle(12, 8, 5);
  $generalTriangleShape->dump();
?>