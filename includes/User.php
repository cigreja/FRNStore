<?php

class User {

    private $name;
    private $email;
    private $password;
    private $cart;

    function getName(){
        return $this->name;
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function getPassword() {
        return $this->password;
    }

    function getCart() {
        return $this->cart;
    }

    function setName($name) {
        $this->name = $name;
    }
    
    function setEmail($email) {
        $this->name = $email;
    }
    
    function setPassword($password) {
        $this->name = $password;
    }

    function setCart($cart) {
        $this->cart = $cart;
    }

}

?>
