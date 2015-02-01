<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comment
 *
 * @author Fabio-CSM
 */
class Comment {
    private $id;
    private $user; //User
    private $text;
    private $date;
    
    function __construct($id, $user, $text, $date) {
        $this->id = $id;
        $this->user = $user;
        $this->text = $text;
        $this->date = $date;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getUser() {
        return $this->user;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function setDate($date) {
        $this->date = $date;
    }


}
