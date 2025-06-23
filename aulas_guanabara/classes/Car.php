<?php

class Car {

    //Properties / Fields
    private $brand; // private restricts aceess to the class itself
    protected $color; //protected allows acess in child classes

    private $model; 

    // Constructor
    public function __construct($brand, $color, $model) {
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
    }


}

