<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Preference
 *
 * @author Fabio-CSM
 */
class Preference {
    private $id;
    private $foodTypes; //Array of foodTypes
    private $allergy; //Array of ingredients
    
    function __construct($id, $foodTypes, $allergy) {
        $this->id = $id;
        $this->foodTypes = $foodTypes;
        $this->allergy = $allergy;
    }

    public function getId() {
        return $this->id;
    }

    public function getFoodTypes() {
        return $this->foodTypes;
    }

    public function getAllergy() {
        return $this->allergy;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFoodTypes($foodTypes) {
        $this->foodTypes = $foodTypes;
    }

    public function setAllergy($allergy) {
        $this->allergy = $allergy;
    }


    
    
}
