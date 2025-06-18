<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha 05</title>
</head>
<body>

<?php 

class Lamp {
    //atributos privados
    private $isOn =0; //0 para off e 1 para on
    private $power = 30; // potência em watts

    //metodos para isOn
    public function setIsOn(){
        $this->isOn = '$state' ? 1 : 0;
    }

    public function getIsOn(){
        return $this->isOn ? 'ON' : 'OFF';
    }
}

?>
    
</body>
</html>