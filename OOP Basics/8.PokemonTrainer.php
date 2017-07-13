<?php
class Pokemon{
    private $name;
    private $element;
    private $health;


    public function __construct(string $name,string $element,int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }
public function getHealth(){
        return $this->health;
}
public function getElement(){
        return $this->element;
}
public function lostHealth(){
    return $this->health-=10;
}

}
class Trainer{
    private $name;
    private $badges=0;
    private $collectionPokemon=[];


    public function __construct(string $name,Pokemon $collectionPokemon)
    {
        $this->name = $name;
        $this->collectionPokemon[] = $collectionPokemon;
    }

public function getName(){
        return $this->name;
}
public function getBadge(){
    return $this->badges;
}
public function addBadge(){
    $this->badges+=1;
}
    public function countPokemon(){
        return count($this->collectionPokemon);
}
    public function deletePokemon()
    {
        foreach ($this->collectionPokemon as $pokemon) {
            $pokemon->lostHealth();
            if ($pokemon->getHealth() <= 0) {
                $key = array_search($pokemon,$this->collectionPokemon);
                array_splice($this->collectionPokemon,$key,1);
    }
        }
    }
    public function getPokemon(){
        return $this->collectionPokemon;
    }
    public function addPokemon(Pokemon $pokemon){
         $this->collectionPokemon[]=$pokemon;
}
}

$trainerArr=[];
$pokemonArr=[];
while (true){
    $input=explode(" ",trim(fgets(STDIN)));
    if($input[0]=='Tournament') {
        break;
        }

    $trainerName = $input[0];
    $pokemonName = $input[1];
    $pokemonElement = $input[2];
    $pokemonHealth = intval($input[3]);

    $pokemon=new Pokemon($pokemonName,$pokemonElement,$pokemonHealth);

if(isset($pokemonArr[$trainerName])){


    $pokemonArr[$trainerName]->addPokemon($pokemon);

}else{
    $pokemonArr[$trainerName]=new Trainer($trainerName,$pokemon);
}
}


while (true) {
    $input = trim(fgets(STDIN));

    if ($input == "End") {
        break;
    }
        $element = $input;
foreach ($trainerArr as $trainer){
    if(searchForElements($trainer->getPokemon(),$element,$trainer)){

    }else{
        $trainer->deletePokemon();
    }
    }

}
var_dump($trainerArr);
//var_dump($elements);
function searchForElements($arrayOfPokemon,$searchElement,$trainer){
    $found=false;
    foreach ($arrayOfPokemon as $pokemon){
        if($pokemon->getElement()==$searchElement){
            $trainer->addBadge();
            $found=true;
        }
    }
    if ($found) {
        return true;
    } else return false;

}

function orderByBadge($a,$b)
{
    if ($a->getBadge() == $b->getBadge()) {
        return 0;
    } else {
        return ($a->getBadge() < $b->getBadge());
    }
}
usort($trainerArr,'orderByBadge');

foreach ($trainerArr as $trainer) {
    echo $trainer->name . " {$trainer->getBadge()} {$trainer->countPokemon()}".PHP_EOL;


}