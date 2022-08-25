<?php
  require_once 'Classes/Annulus.php';
  require_once 'Classes/Disk.php';
  require_once 'Classes/Square.php';
  require_once 'Classes/Rectangle.php';
  require_once 'Classes/RightTriangle.php';
  require_once 'Classes/IsoscelesTriangle.php';
  require_once 'Classes/GeneralTriangle.php';

  function createInstance($class, $params) {
    $reflection_class = new ReflectionClass($class);
    return $reflection_class->newInstanceArgs($params);
  }

  function displayHelp($commands) {
    echo("This program is meant to be used to compute perimeters and areas of 2D geometrical shapes.".PHP_EOL);
    echo("To use it, type a command as follow : shape_name args1 args2 args3".PHP_EOL);
    echo("Availables geometrical shapes:".PHP_EOL);
    foreach ($commands as $command) {
      echo(sprintf("\"%s\" shape requires \"%d\" arguments to be created and computed.".PHP_EOL, $command[0], $command[2]));
    }
    echo("If you need more informations, please check : https://github.com/benjaminaudet/yet-another-shape-calculator/blob/main/README.md".PHP_EOL);
  }

  $commands = [
    ['annulus', Annulus::class, 2],
    ['disk', Disk::class, 1],
    ['square', Square::class, 1],
    ['rectangle', Rectangle::class, 2],
    ['right_triangle', RightTriangle::class, 2],
    ['isosceles_triangle', IsoscelesTriangle::class, 2],
    ['general_triangle', GeneralTriangle::class, 3],
  ];

  while ($input = strtolower(readline())) {
    foreach ($commands as $command) {
      $args = explode(' ', $input);
      if ($args[0] === $command[0]) {
        if (count($args) < $command[2]) {
          echo("The geometrical shape you're trying to create requires more arguments.".PHP_EOL);
          break;
        }
        $obj = createInstance($command[1], array_slice($args, 1));
        $obj->dump();
        break;
      } else if ($args[0] === "help") {
        displayHelp($commands);
        break;
      }
    }
  }

?>