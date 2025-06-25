<?php
class Masina {
    public string $marca;
    public string $model;
    public int $an;
    public string $culoare;
    public function __construct(string $marca, string $model, int $an, string $culoare){
    
            $this->marca = $marca;
            $this->model = $model;
            $this->an = $an;
            $this->culoare = $culoare;
        }
    
    }

    $Toyota=new Masina("Toyota","Yaris",2015,"roz");

