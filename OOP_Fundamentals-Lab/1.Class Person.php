<?php
class Person{
    private $name;
    private $age;
    public function __construct($name,$age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if(strlen($name)<3){
            throw new Exception("Name’s length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if ($age < 1) {
            throw new Exception("Age must be positive!");
        }
            $this->age = $age;

    }
}
class Child extends Person{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }
    function setAge($age)
    {
       
        if ($age >15) {
            throw new Exception("Child’s age must be less than 16!");
        }
        return parent::setAge($age);
    }
}
$person=new Person("Ivan","9");
echo $person->getName();
echo $person->getAge();
$child=new Child("Eva",96);
echo $child->getName();
echo $child->getAge();