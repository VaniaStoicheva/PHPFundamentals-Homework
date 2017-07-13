<?php


class Person
{
private $name;
private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
    */
    public function __construct(string $name,int $age)
    {
    $this->name = $name;
    $this->age = $age;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}