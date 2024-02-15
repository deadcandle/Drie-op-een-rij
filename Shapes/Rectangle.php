<?php

namespace Shapes;

class Rectangle extends Figure {

    public function __construct($color, $width, $height) {
        $this->setColor($color);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function draw() : string {
        return '
        <svg width='.$this->getWidth().' height='.$this->getHeight().' xmlns="http://www.w3.org/2000/svg">
            <rect width='.$this->getWidth().' height='.$this->getHeight().' rx="20" ry="20" fill='.$this->getColor().' />
        </svg> 
        ';
    }
}

?>