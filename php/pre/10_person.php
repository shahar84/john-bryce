<?php

/**
 * OOP - Object Oriented Programing
 *
 * Benefits:
 * 1) Modular stricture to your application
 * 2) Easier to maintain code base
 *
 * */
class Person
{
    var $name, $profession, $gender;

    function __construct($name = '', $profession = '', $gender = '')
    {
        $this->name = $name;
        $this->profession = $profession;
        $this->gender = $gender;
    }

    function hello()
    {
        return "Hi my name is {$this->name}, I am a {$this->gender}, and I work as {$this->profession}";
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$person = new Person("Shahar", "Full Stack Developer", "Male");
print_r($person->hello());