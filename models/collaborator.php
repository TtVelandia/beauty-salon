<?php

require_once "dao/collaborator_dao.php";

class Collaborator {

    use CollaboratorDao;


    private $id;
    private $name;
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

    public function propiedades() {
        return get_object_vars($this);
    }   

    function __destruct() {
        
    }
}