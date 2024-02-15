<?php
require_once __DIR__ . '/vendor/autoload.php';
require("Figure.php");
use Shapes\Triangle;
use Shapes\Square;
use Shapes\Rectangle;
use Shapes\Circle;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drie op een rij</title>
</head>
<body>
    <?php
        $square1 = new Rectangle("blue", 100, 100);
        $square2 = new Rectangle("purple", 100, 100);
        $square3 = new Rectangle("green", 100, 100);
        echo $square1->draw();
        echo $square2->draw();
        echo $square3->draw();
    ?>
    <br>
    <?php
        $circle1 = new Circle("blue", 100, 100);
        $circle2 = new Circle("purple", 100, 100);
        $circle3 = new Circle("green", 100, 100);
        echo $circle1->draw();
        echo $circle2->draw();
        echo $circle3->draw();
    ?>
    <br>
    <?php
        $rect1 = new Rectangle("blue", 100, 50);
        $rect2 = new Rectangle("purple", 100, 50);
        $rect3 = new Rectangle("green", 100, 50);
        echo $rect1->draw();
        echo $rect2->draw();
        echo $rect3->draw();
    ?>
        <br>
    <?php
        $triangle1 = new Triangle("blue", 100, 100);
        $triangle2 = new Triangle("purple", 100, 100);
        $triangle3 = new Triangle("green", 100, 100);
        echo $triangle1->draw();
        echo $triangle2->draw();
        echo $triangle3->draw();
    ?>
</body>
</html>