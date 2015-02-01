<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Position
 *
 * @author Fabio-CSM
 */
class Position {
   private $latitude;
   private $longitude;
   
   function __construct($latitude, $longitude) {
       $this->latitude = $latitude;
       $this->longitude = $longitude;
   }
   
   public function getLatitude() {
       return $this->latitude;
   }

   public function getLongitude() {
       return $this->longitude;
   }

   public function setLatitude($latitude) {
       $this->latitude = $latitude;
   }

   public function setLongitude($longitude) {
       $this->longitude = $longitude;
   }


}
