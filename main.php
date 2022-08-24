<?php
  require_once 'Classes/AnnulusShape.php';
  require_once 'Classes/DiskShape.php';
  require_once 'Classes/SquareShape.php';

  $annulus = new AnnulusShape(5, 3);
  $annulus->dump();
  
  $disk = new DiskShape(5);
  $disk->dump();

  $square = new SquareShape(5);
  $square->dump();
?>