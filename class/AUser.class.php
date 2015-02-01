<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AUser
 *
 * @author Fabio-CSM
 */
abstract class AUser {
    private $id;
    private $username;
    private $email;
    private $phone;
    private $points;
    
    private function __construct() {
    }
    
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getPoints() {
        return $this->points;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setPoints($points) {
        $this->points = $points;
    }
    
    public function createComment($user, $text, $date){
       // no-op
    }
    
    public function editComment($id, $text, $date) {
        // no-op
    }
    public function deleteComment($id){
        //no-op
    }
    
    public function uploadFoodPhoto($food, $file){
        //no-op
    }
    public function deleteFoodPhoto($food) {
        // no-op
    }


    
}
