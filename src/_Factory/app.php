<?php

use App\_Factory\ShapeFactory;
use App\_Factory\Forms\Square;


$square = new ShapeFactory(new Square());

$shape = $square->getShape()->draw();

echo "BEFORE";

echo $shape;

echo "salam";