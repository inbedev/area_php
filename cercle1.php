<!DOCTYPE html>
<html>
    <head>
        <title>Cercle</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
    //Include the class definition:
    require('cercle.php');

    //Define the necessary variables:
    $radius= 10;

//Create new object:
$c= new Cercle();

 //Assign the circle dimensions:
$c->setSize($radius);

//Print the area:
echo '<p>The area of the circle is ' . $c->getArea() . '</p>';

//Print the perimeter:
echo '<p>The perimeter of the circle is ' . $c->getPerimeter() . '</p>';

//Print the diameter:
echo '<p>The diameter of the circle is' . $c->getDiameter() . '</p>';

//Delete the object:
unset($c);

?>
    </body>
</html>