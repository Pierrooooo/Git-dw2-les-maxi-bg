<?php

abstract class Shape{

    public float $width;
    public float $height;
    public float $base;
    public float $radius;

    public function __construct($width, $height, $base, $radius)
    {
        $this->width = $width;
        $this->height = $height;
        $this->width = $base;
        $this->width = $radius;
    }

    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getBase()
    {
        return $this->base;
    }
    public function getRadius()
    {
        return $this->radius;
    }


}