<?php

class Persons
{
    private $name;
    private $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

}

$numberLine = trim(fgets(STDIN));
$persons = array();
for ($i = 0; $i < $numberLine; $i++) {
    $input = trim(fgets(STDIN));
    $input = explode(" ", $input);

    $name = $input[0];
    $age = intval($input[1]);

    if ($age > 30) {
        $person = new Persons($name, $age);
        $persons[] = $person;
    }
}
usort($persons, function ($a, $b) {
    return strcmp($a->getName(), $b->getName());
});

for ($i=0;$i<count($persons);$i++){
    echo $persons[$i]->getName().' - '.$persons[$i]->getAge()."\n";
}

