<?php
class Car{
    private $speed;
    private $fuel;
    private $fuelEconomy;

    /**
     * Car constructor.
     * @param int $speed
     * @param $fuel
     * @param $fuelEconomy
     */
    public function __construct(int $speed,int $fuel,int $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
    }

}
while(true){
    $input=explode(' ',trim(fgets(STDIN)));
    if($input[0]=="END"){
        break;
    }
    $speed=$input[0];
    $fuel=$input[1];
    $fuelEconomy=$input[2];

    $car=new Car($speed,$fuel,$fuelEconomy);

    switch ($input[3]){
        case 'Travel':
            $distanse=$input[4];
            break;
        case 'Refuel':
            $liters=$input[4];
            break;
        case 'Distance':
            return totalDistance();
            break;
        case 'Time':
            return totalTime();
            break;
        case 'Fuel':
            return fuelLeft();
            break;
    }
}