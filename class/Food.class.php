<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Food
 *
 * @author Fabio-CSM
 */
class Food {
    private $id;
    private $name;
    private $ingredients; //Array of Ingredients
    private $foodType; //Array of FoodTypes
    private $photoURL;
    private $comments; //Array of comments
    private $available = true; //boolean if is available;
    private $points;
    
    function __construct($id, $name, $ingredients, $foodType, $photoURL, $comments, $available, $points) {
        $this->id = $id;
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->foodType = $foodType;
        $this->photoURL = $photoURL;
        $this->comments = $comments;
        $this->available = $available;
        $this->points = $points;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function getFoodType() {
        return $this->foodType;
    }

    public function getPhotoURL() {
        return $this->photoURL;
    }

    public function getComments() {
        return $this->comments;
    }

    public function getAvailable() {
        return $this->available;
    }

    public function getPoints() {
        return $this->points;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    public function setFoodType($foodType) {
        $this->foodType = $foodType;
    }

    public function setPhotoURL($photoURL) {
        $this->photoURL = $photoURL;
    }

    public function setComments($comments) {
        $this->comments = $comments;
    }

    public function setAvailable($available) {
        $this->available = $available;
    }

    public function setPoints($points) {
        $this->points = $points;
    }


    
}
