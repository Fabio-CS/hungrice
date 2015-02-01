<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserMenu
 *
 * @author Fabio-CSM
 */
class UserMenu {
    private $id;
    private $client; //Client obj
    private $schedule; // Week Menu obj
    private $date; //Date of start
    
    function __construct($id, $client, $schedule, $date) {
        $this->id = $id;
        $this->client = $client;
        $this->schedule = $schedule;
        $this->date = $date;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getClient() {
        return $this->client;
    }

    public function getSchedule() {
        return $this->schedule;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setClient($client) {
        $this->client = $client;
    }

    public function setSchedule($schedule) {
        $this->schedule = $schedule;
    }

    public function setDate($date) {
        $this->date = $date;
    }


    
}
