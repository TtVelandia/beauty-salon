<?php

require_once "dao/booking_dao.php";

class Booking {

    use BookingDao;


    private $id;
    private $name;
    private $celphone;
    private $date;
    private $hour;
    private $quantity;
    private $comment;
    private $service;

    function __construct(){
        
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function propiedades() {
        return get_object_vars($this);
    }   

    function __destruct() {
        
    }
}