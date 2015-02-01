<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ingredient
 *
 * @author Fabio-CSM
 */
class Ingredient {
    private $id;
    private $name;
    private $derivative; //Ingredient obj
    
    function __construct($id, $name, $derivative) {
        $this->id = $id;
        $this->name = $name;
        $this->derivative = $derivative;
    }

        public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDerivative() {
        return $this->derivative;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDerivative($derivative) {
        $this->derivative = $derivative;
    }


    
}
