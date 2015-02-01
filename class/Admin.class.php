<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Fabio-CSM
 */
class Admin extends AUser {
    
    private $place;
    private $university;
    
     private function __construct() {
         parent::__construct();
        }

    public static function makeNewAdmin($username, $email, $phone, $place) {
        $obj = new Admin(); 
        $obj->setUsername($username);
        $obj->setEmail($email);
        $obj->setPhone($phone);
        $obj->setPlace($place);
        return $obj;
    }

    public static function makeNewUniversityAdmin($username, $email, $phone, $university) {
        $obj = new Admin(); 
        $obj->setUsername($username);
        $obj->setEmail($email);
        $obj->setPhone($phone);
        $obj->setUniversity($university);
        return $obj;
    }
    
    public function getPlace() {
        return $this->place;
    }

    public function getUniversity() {
        return $this->university;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }


    
}
