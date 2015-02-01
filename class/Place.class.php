<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Place
 *
 * @author Fabio-CSM
 */
class Place {
   private $id;
   private $name;
   private $address;
   private $position; //Position obj
   private $university; //University obj
   private $weekMenus; //Array of Week Menus
   
   function __construct($id, $name, $address, $position, $university, $weekMenus) {
       $this->id = $id;
       $this->name = $name;
       $this->address = $address;
       $this->position = $position;
       $this->university = $university;
       $this->weekMenus = $weekMenus;
   }
   
   public function getId() {
       return $this->id;
   }

   public function getName() {
       return $this->name;
   }

   public function getAddress() {
       return $this->address;
   }

   public function getPosition() {
       return $this->position;
   }

   public function getUniversity() {
       return $this->university;
   }

   public function setId($id) {
       $this->id = $id;
   }

   public function setName($name) {
       $this->name = $name;
   }

   public function setAddress($address) {
       $this->address = $address;
   }

   public function setPosition($position) {
       $this->position = $position;
   }

   public function setUniversity($university) {
       $this->university = $university;
   }
   public function getWeekMenus() {
       return $this->weekMenus;
   }

   public function setWeekMenus($weekMenus) {
       $this->weekMenus = $weekMenus;
   }

   
}
