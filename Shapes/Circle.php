<?php

namespace Shapes;

class Circle extends Figure {
   
    public function __construct($color, $height, $width) {
        $this->setColor($color);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function draw() : string {
        return '
        <svg height="100" width="100" xmlns="http://www.w3.org/2000/svg">
            <circle r="45" cx="50" cy="50" stroke-width="3" fill='.$this->getColor().' />
        </svg> 
        ';
    }
}

?>