<?php

class Fruit
{
    public string $name;
    public string $color;

    function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details()
    {
        echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
    }
}

$apple = new Fruit('Apple', 'Red');
$apple->get_details();

$banana = new Fruit('Banana', 'Yellow');
$banana->get_details();