<?php
class Person{
    private $name;
    private $age;
    function __construct(string $name,int $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function getName(){
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function __toString()
    {
        return $this->getName()." ".$this->getAge().PHP_EOL;
    }
}
class Family{
    /**
     * @var Person
     */
    private $person=[];

    function __construct()
    {

    }

    function addMembers(Person $person){
        $this->person[]=$person;
    }
    function getOldestMembers(){
        $maxAges=-1;
            foreach ($this->person as $item){

                if($item->getAge() > $maxAges){

                    $maxAges=$item->getAge();
                    $oldestPerson=$item;
                }

            }
        return $oldestPerson;
        }

}
$n=intval(trim(fgets(STDIN)));
$familyArr = new Family();
for ($i=0;$i<$n;$i++) {
    $input =explode(" ", trim(fgets(STDIN)));
    $name = $input[0];
    $age = intval($input[1]);

    //$person=new Person($name,$age);

    $familyArr->addMembers(new Person($name,$age));


}
//var_dump($familyArr);
echo $familyArr->getOldestMembers();

