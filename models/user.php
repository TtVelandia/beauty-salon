<?php

require_once "dao/user_dao.php";

class User {

    use UserDao;

    private $id;
    private $nickname;
    private $password;
    private $name;

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