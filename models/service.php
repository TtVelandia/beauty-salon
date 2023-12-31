<?php

require_once "dao/service_dao.php";

class Service {

    use ServiceDao;


    private $id;
    private $name;
    private $price;
    private $image;

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

    public function properties() {
        return get_object_vars($this);
    }   

    function __destruct() {
        
    }
}