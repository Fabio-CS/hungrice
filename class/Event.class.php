<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author Fabio-CSM
 */
class Event {
    private $id;
    private $name;
    private $menu; //MealMenu obj
    private $participants; //Array of clients
    private $isPublic; //boolean if is public or not
    private $maxPeople;
    private $eventType; // Event type obj
    
    function __construct($id, $name, $menu, $participants, $isPublic, $maxPeople, $eventType) {
        $this->id = $id;
        $this->name = $name;
        $this->menu = $menu;
        $this->participants = $participants;
        $this->isPublic = $isPublic;
        $this->maxPeople = $maxPeople;
        $this->eventType = $eventType;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getMenu() {
        return $this->menu;
    }

    public function getParticipants() {
        return $this->participants;
    }

    public function getIsPublic() {
        return $this->isPublic;
    }

    public function getMaxPeople() {
        return $this->maxPeople;
    }

    public function getEventType() {
        return $this->eventType;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setMenu($menu) {
        $this->menu = $menu;
    }

    public function setParticipants($participants) {
        $this->participants = $participants;
    }

    public function setIsPublic($isPublic) {
        $this->isPublic = $isPublic;
    }

    public function setMaxPeople($maxPeople) {
        $this->maxPeople = $maxPeople;
    }

    public function setEventType($eventType) {
        $this->eventType = $eventType;
    }


    
}
