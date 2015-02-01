<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of University
 *
 * @author Fabio-CSM
 */
class University {
    private $id;
    private $name;
    private $city;
    private $state;
    private $country;
    
    function __construct($id, $name, $city, $state, $country) {
        $this->id = $id;
        $this->name = $name;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCity() {
        return $this->city;
    }

    public function getState() {
        return $this->state;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setCountry($country) {
        $this->country = $country;
    }


    
}
