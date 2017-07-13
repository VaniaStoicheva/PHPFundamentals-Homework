<?php
class Person{
    private $personName;
    private $company;
    private $pokemon=[];
    private $parents=[];
    private $children=[];
    private $car;

    function __construct(string $personName)
    {
        $this->personName=$personName;
    }

    function setCompany(string $companyName,string $department,float $salary){
        $this->company=new Company($companyName,$department,$salary);
    }
    function setCar(string $model,int $speed){
        $this->car=new Car($model,$speed);
    }
    function addPokemon(string $pokemonName,string $pokemonType){
        $this->pokemon[]=new Pokemon($pokemonName,$pokemonType);
    }
    function addParents(string $parentName,string $parentBirthday){
        $this->parents[]=new Kin($parentName,$parentBirthday);
    }
    function addChildren(string $parentName,string $parentBirthday){
        $this->children[]=new Kin($parentName,$parentBirthday);
    }

    function __toString()
    {
        $pokemonString='';
        foreach ($this->pokemon as $pokemon) {
            $pokemonString.=$pokemon.PHP_EOL;
        }
        $childrenString='';
        foreach ($this->children as $child){
            $childrenString.=$child.PHP_EOL;
        }
        $parentString='';
        foreach ($this->parents as $parent){
            $parentString.=$parent.PHP_EOL;
        }
        $companyString=$this->company ? $this->company.PHP_EOL : null;
        $carString=$this->car ? $this->car.PHP_EOL : null;

        return $this->personName.PHP_EOL
            .'Company:'.PHP_EOL
            .$companyString
            .'Car:'.PHP_EOL
            .$carString
            .'Pokemon:'.PHP_EOL
            .$pokemonString
            .'Parents:'.PHP_EOL
            .$parentString
            .'Children:'.PHP_EOL
            .$childrenString;
    }
}
class Car{
    private $model;
    private $speed;
    public function __construct(string $model,int $speed)
    {
        $this->model=$model;
        $this->speed=$speed;
    }
    function __toString()
    {
        return $this->model.' '.$this->speed;
    }
}
class Pokemon{
    private $pokemonName;
    private $pokeminType;
    function __construct(string $pokemonName,string $pokemonType)
    {
        $this->pokemonName=$pokemonName;
        $this->pokeminType=$pokemonType;

    }
    function __toString()
    {
        return $this->pokemonName.' '.$this->pokeminType;
    }
}
class Kin{
    private $kinName;
    private $kinBirthday;
    function __construct(string $kinName,string $kinBirthday)
    {
        $this->kinName=$kinName;
        $this->kinBirthday=$kinBirthday;
    }
    function __toString()
    {
        return $this->kinName.' '.$this->kinBirthday;
    }
}
class Company{
    private $companyName;
    private $department;
    private $salary;
    function __construct(string $companyName,string $department,float $salary){
        $this->companyName=$companyName;
        $this->department=$department;
        $this->salary=$salary;
    }

   function __toString()
   {
       return $this->companyName.' '.$this->department.' '.number_format($this->salary,2);
   }
}


$personArr=[];

while(true){
    $line=explode(" ",trim(fgets(STDIN)));
    if($line[0]=="End"){
        break;
    }
    $personName=$line[0];
    $property=$line[1];

    switch ($property){
        case 'company':
            if(array_key_exists($personName,$personArr)) {
                $personArr[$personName]->setCompany($line[2], $line[3], floatval($line[4]));
            }else{
                $personArr[$personName] = new Person($personName);
                $personArr[$personName]->setCompany($line[2], $line[3], floatval($line[4]));
            }
            break;
        case 'car':
            if(array_key_exists($personName,$personArr)){
                $personArr[$personName]->setCar($line[2],intval($line[3]));
            }else{
                $personArr[$personName]=new Person($personName);
                $personArr[$personName]->setCar($line[2],intval($line[3]));
            }
            break;
        case 'pokemon':
            if(array_key_exists($personName,$personArr)){
                $personArr[$personName]->addPokemon($line[2],$line[3]);
            }else{
                $personArr[$personName]=new Person($personName);
                $personArr[$personName]->addPokemon($line[2],$line[3]);
            }
            break;
        case 'parents':
            if(array_key_exists($personName,$personArr)){
                $personArr[$personName]->addParents($line[2],$line[3]);
            }else{
                $personArr[$personName]=new Person($personName);
                $personArr[$personName]->addParents($line[2],$line[3]);
            }
            break;
        case 'children':
            if(array_key_exists($personName,$personArr)){
                $personArr[$personName]->addChildren($line[2],$line[3]);
            }else{
                $personArr[$personName]=new Person($personName);
                $personArr[$personName]->addChildren($line[2],$line[3]);
            }
            break;
    }




}
$searchPerson=trim(fgets(STDIN));
$searchPerson=$personArr[$searchPerson];
echo $searchPerson;

