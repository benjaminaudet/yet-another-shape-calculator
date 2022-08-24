<?php
  require_once 'Classes/AnnulusShape.php';
  require_once 'Classes/DiskShape.php';

  $annulus = new AnnulusShape(5, 3);
  echo($annulus->computePerimeter().PHP_EOL);
  echo($annulus->computeSurface().PHP_EOL);
  
  $disk = new DiskShape(5);
  echo($disk->computePerimeter().PHP_EOL);
  echo($disk->computeSurface().PHP_EOL);
?>