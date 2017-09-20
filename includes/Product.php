<?php

class Product {

    private $name;
    private $code;
    private $price;
    private $image;

    function getName() {
        return $this->name;
    }

    function getCode() {
        return $this->code;
    }
    
    function getPrice() {
        return $this->price;
    }
    
    function getImage() {
        return $this->image;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setCode($code) {
        $this->code = $code;
    }
    
    function setPrice($price) {
        $this->price = $price;
    }
    
    function setImage($image) {
        $this->image = $image;
    }
}

?>
