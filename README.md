# yet-another-shape-calculator

This project is a PHP7 project that gathers a class system in order to compute 2D geometrical shapes.

## Requires

This project has been developed and tested to work with PHP7.
So make sure you are using PHP7 while testing it.

## Run

These commands works with zsh on Ubuntu 22.04 on WSL 2.

`git clone git@github.com:benjaminaudet/yet-another-shape-calculator.git`
`php7.0 main.php`

## Explanation

This program can compute perimeter and area of several geometrical shapes:
* Annulus
* Disk
* Square
* Rectangle
* Right Triangle
* Isosceles Triangle
* General Triangle

## How to use

The program has a console input where you can type a command.
Type "help" to learn the command format.

## Constraints of execution

* The Annulus shape requires 2 arguments : a radius and an innerRadius (the innerRadius cannot be greater than the radius)  
example : `annulus 5 3`
* The Disk shape requires 1 argument : a radius  
example : `disk 5`
* The Square shape requires 1 argument : a side's length 
example : `square 5`
* The Rectangle shape requires 2 arguments : the two sides' length  
example : `rectangle 5 4`
* The Right Triangle shape requires 2 arguments : the two sides' length (not including hypotenuse).  
example : `right_triangle 5 3`
* The Isosceles Triangle shape requires 2 arguments : the two identical sides' length and the base side's length.  
example : `isosceles_triangle 5 3`
* The General Triangle shape requires 3 arguments : the first side's length, the second side's length and the third one.  
example : `general_triangle 5 3 4`
