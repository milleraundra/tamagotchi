<?php

class Tamagotchi {
    private $name;
    private $food;
    private $sleep;
    private $attention;

    function __construct($set_name, $set_food, $set_sleep, $set_attention)
    {
        $this->name = $set_name;
        $this->food = $set_food;
        $this->sleep = $set_sleep;
        $this->attention = $set_attention;
    }

    function setName($set_name)
    {
        $this->name = $set_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setFood($set_food)
    {
        $this->food = $set_food;
    }

    function getFood()
    {
        return $this->food;
    }

    function setSleep($set_sleep)
    {
        $this->sleep = $set_sleep;
    }

    function getSleep()
    {
        return $this->sleep;
    }

    function setAttention($set_attention)
    {
        $this->attention = $set_attention;
    }

    function getAttention()
    {
        return $this->attention;
    }

    function save()
    {
        array_push($_SESSION['living_tamagotchi'], $this);
    }

    static function getAll()
    {
        return $_SESSION['living_tamagotchi'];
    }

    static function deleteAll()
    {
        $_SESSION['living_tamagotchi'] = array();
    }

}

?>
