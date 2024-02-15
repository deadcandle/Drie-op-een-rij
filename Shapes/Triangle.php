<?php

namespace Shapes;

class Triangle extends Figure {

    public function __construct($color, $height, $width) {
        $this->setColor($color);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function draw() : string {
        return '
        <svg height='.$this->getHeight().' width='.$this->getWidth().' xmlns="http://www.w3.org/2000/svg">
            <polygon points="50,0 100,100 0,100" style="fill:'.$this->getColor().';" />
        </svg>
        ';
    }
}

?>