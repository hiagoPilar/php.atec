<?php

class Car {

    //Properties / Fields
    private $brand; // private restricts aceess to the class itself
    protected $color; //protected allows acess in child classes
    private $model; 

    // Constructor
    public function __construct($brand, $color = "none", $model) {
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
    }

    // Getters & Setters methods
    public function getBrand(){
        return $this->brand;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        
        $allowedColors = ["Red", "Green", "Blue", "Black", "White"];

        if(in_array($color, $allowedColors)){
            $this->color = $color;
        } else {
            echo "Color not allowed!<br>";  
        }
    }
    
    public function getModel()
    {
        return $this->model;
    }
    public function sertModel($model){
        $this->model = $model;
    }


    //Method
    public function getCarInfo(){ 
        return "Brand: {$this->brand}, Color: {$this->color}, Model: {$this->model}";
    }
}

$car01 = new Car("Volvo", "Green", "XC90");
$car02 = new Car("BMW", "", "X5");

echo $car01->getCarInfo() . "<br>"; // vai exibir a informação do carro 01


