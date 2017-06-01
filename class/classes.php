<?php


class Person
{
    var $height;
    private $_name;
    private $_age;
    private $_bad_names = ['luzifer'];

    function __construct($name, $age = 0, $height = 0)
    {
        $this->height = $height;
        $this->setAge($age);
        $this->setName($name);
    }

    function hello()
    {
        return "Hi, my name is {$this->getName()}, My age is {$this->getAge()}";
    }


    function setName($name)
    {
        if (array_search($name, $this->_bad_names) != false){
            $this->_name = ucfirst($name);
        }
    }

    function getName()
    {
        return $this->_name;
    }

    function setAge($age)
    {
        if ($age > 0 && $age <= 120) {
            $this->_age = $age;
        }
    }

    function getAge()
    {
        return $this->_age;
    }

}


$devil = new Person("luzifer", 20, 286);
$person = new Person("Shahar", 30, 186);
print_r($person);























