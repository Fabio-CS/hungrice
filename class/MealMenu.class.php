<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MealMenu
 *
 * @author Fabio-CSM
 */
class MealMenu {
    private $id;
    private $place; //Place obj
    private $food; //Array of Food
    private $unavailable; //Array of Food
    private $mealType; //Type of meal enum
    
    function __construct($id, $place, $food, $unavailable, $mealType) {
        $this->id = $id;
        $this->place = $place;
        $this->food = $food;
        $this->unavailable = $unavailable;
        $this->mealType = $mealType;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getFood() {
        return $this->food;
    }

    public function getUnavailable() {
        return $this->unavailable;
    }

    public function getMealType() {
        return $this->mealType;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function setFood($food) {
        $this->food = $food;
    }

    public function setUnavailable($unavailable) {
        $this->unavailable = $unavailable;
    }

    public function setMealType($mealType) {
        $this->mealType = $mealType;
    }


    
}
