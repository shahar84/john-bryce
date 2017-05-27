<?php

/**
 * OOP - Object Oriented Programing
 *
 * Benefits:
 * 1) Modular stricture to your application
 * 2) Easier to maintain code base
 *
 **/
class PersonWithoutConstructor
{
    var $name;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$person = new PersonWithoutConstructor();
$person->set_name('Shahar');

print_r($person->get_name());
