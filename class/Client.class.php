<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author Fabio-CSM
 */
class Client extends AUser{
    
    private $college;
    private $preference; //Preference obj
    private $checkin; //Place obj
    private $following; //Array of clients
    
    private function __construct() {
         parent::__construct();
        }

    public static function makeNewClient($username, $email, $phone, $points, $college) {
        $obj = new Client(); 
        $obj->setUsername($username);
        $obj->setEmail($email);
        $obj->setPhone($phone);
        $obj->setPoints($points);
        $obj->setCollege($college);
        return $obj;
    }
    
     public static function makeClientFromDB($id, $username, $email, $phone, $points, $college, $preference, $following) {
        $obj = new Client(); 
        $obj->setId($id);
        $obj->setUsername($username);
        $obj->setEmail($email);
        $obj->setPhone($phone);
        $obj->setPoints($points);
        $obj->setCollege($college);
        $obj->setPreference($preference);
        $obj->setFollowing($following);
        return $obj;
    }
    
    public function getCollege() {
        return $this->college;
    }

    public function getPreference() {
        return $this->preference;
    }

    public function getCheckin() {
        return $this->checkin;
    }

    public function getFollowing() {
        return $this->following;
    }

    public function setCollege($college) {
        $this->college = $college;
    }

    public function setPreference($preference) {
        $this->preference = $preference;
    }

    public function setCheckin($checkin) {
        $this->checkin = $checkin;
    }

    public function setFollowing($following) {
        $this->following = $following;
    }
    
    public function checkin($place){
        
    }
    
    public function voteFood($food){
        
    }


    
}
