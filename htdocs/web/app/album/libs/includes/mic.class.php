<?php

// how to create a class in php using class keyword 
// all are keywords

// these are the access specifiers
// public
// private
// protected

class Mic
{
    // initializing a class
    public $brand;
    public $color;
    public $usb_port;
    public $model;
    public $light;
    public $price;
    // I created this to check I can do same mic1
    public $song;

    public function setLight($light)
    {
        $this->light = $light;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = ucwords($model);
    }

    public static function testfunction()
    {
        printf("hello I am from test function");
    }
}

// $mic1 = new Mic(); // creating an object

?>
<?php

class red
{
    public static function car()
    {
        printf("I am the real car from a real static function");
    }
}

?>
