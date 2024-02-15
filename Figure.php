<?php

namespace Shapes;

abstract class Figure {
    private string $color;
    private int $height;
    private int $width;

    public function __construct(string $color) {
        $this->$color = $color;
    }

    abstract public function draw() : string;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() : string {
        return $this->color;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }
    
    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }
}

?>