<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeekMenu
 *
 * @author Fabio-CSM
 */
class WeekMenu {
    private $id;
    private $daysMenu; //Arrays of days menus
    private $date;
    
    function __construct($id, $daysMenu, $date) {
        $this->id = $id;
        $this->daysMenu = $daysMenu;
        $this->date = $date;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getDaysMenu() {
        return $this->daysMenu;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDaysMenu($daysMenu) {
        $this->daysMenu = $daysMenu;
    }

    public function setDate($date) {
        $this->date = $date;
    }


    
}
