<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DayMenu
 *
 * @author Fabio-CSM
 */
class DayMenu {
    private $id;
    private $mealMenus; //Array of MealMenus
    private $dayOfWeek; //Enum DayOfWeek
    private $date;

    function __construct($id, $mealMenus, $dayOfWeek, $date) {
        $this->id = $id;
        $this->mealMenus = $mealMenus;
        $this->dayOfWeek = $dayOfWeek;
        $this->date = $date;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getMealMenus() {
        return $this->mealMenus;
    }

    public function getDayOfWeek() {
        return $this->dayOfWeek;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMealMenus($mealMenus) {
        $this->mealMenus = $mealMenus;
    }

    public function setDayOfWeek($dayOfWeek) {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function setDate($date) {
        $this->date = $date;
    }


    
}
