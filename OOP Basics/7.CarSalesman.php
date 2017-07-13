<?php
class Engine{
     private $model;
     private $power;
     private $displacement;
     private $efficiency;

    /**
     * Engine constructor.
     * @param $model
     * @param $power
     * @param $displacement
     * @param $efficiency
     */
    public function __construct($model, $power, $displacement="n/a", $efficiency="n/a")
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getDisplacement(): string
    {
        return $this->displacement;
    }

    /**
     * @param string $displacement
     */
    public function setDisplacement(string $displacement)
    {
        $this->displacement = $displacement;
    }

    /**
     * @return string
     */
    public function getEfficiency(): string
    {
        return $this->efficiency;
    }

    /**
     * @param string $efficiency
     */
    public function setEfficiency(string $efficiency)
    {
        $this->efficiency = $efficiency;
    }

}
class Car{
    /**
     * @var string
     */
    private $model;
    /**
     * @var Engine
     */
   private  $engineModel;
    private $weight;
    private $color;

    /**
     * Car constructor.
     * @param string $model
     * @param Engine $engineModel
     * @param $weight
     * @param $color
     */
    public function __construct($model, Engine $engineModel, $weight="n/a", $color="n/a")
    {
        $this->model = $model;
        $this->engineModel = $engineModel;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function __toString()
    {
        return $this->getModel().':'.PHP_EOL.
            ' '.$this->engineModel->getModel().':'.PHP_EOL.
            '  '.'Power: '.$this->getEngineModel()->getPower().PHP_EOL.
            '  '.'Displacement: '.$this->getEngineModel()->getDisplacement().PHP_EOL.
            '  '.'Efficiency: '.$this->getEngineModel()->getEfficiency().PHP_EOL.
            ' '.'Weight: '.$this->getWeight().PHP_EOL.
            ' '.'Color: '.$this->getColor().PHP_EOL;

    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return Engine
     */
    public function getEngineModel(): Engine
    {
        return $this->engineModel;
    }

    /**
     * @param Engine $engineModel
     */
    public function setEngineModel(Engine $engineModel)
    {
        $this->engineModel = $engineModel;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }
}

$n=intval(trim(fgets(STDIN)));

$engineArr=[];
for ($i=0;$i<$n;$i++){
    $engines=explode(" ",trim(fgets(STDIN)));
    $model=$engines[0];
    $power=intval($engines[1]);

    $engine=new Engine($model,$power,"n/a","n/a");

    if(count($engines)>3){
    $displacement=$engines[2];
    $efficient=$engines[3];

    $engine=new Engine($model,$power,$displacement,$efficient);
}
    elseif(count($engines)>2){
        if(is_numeric($engines[2])){
            $displacement=$engines[2];

            $engine=new Engine($model,$power,$displacement,"n/a");
        }else{
            $efficient=$engines[2];
            $engine=new Engine($model,$power,"n/a",$efficient);
        }
    }

    $engineArr[]=$engine;
}
//var_dump($engineArr);

$m=intval(trim(fgets(STDIN)));
$carsArr=[];
for ($i=0;$i<$m;$i++){
    $input=explode(" ",trim(fgets(STDIN)));
    $model=$input[0];
    $carEngineModel=null;
foreach ($engineArr as $engineModels){
    if($engineModels->getModel()==$input[1]){
        $carEngineModel=$engineModels;
    }
}


    $car=new Car($model,$carEngineModel,"n/a","n/a");

    if(count($input)>3){
        $weight=$input[2];
        $color=$input[3];
        $car=new Car($model,$carEngineModel,$weight,$color);
    }
    elseif (count($input)>2){
        if(is_numeric($input[2])) {
            $weight = $input[2];
            $car = new Car($model, $carEngineModel, $weight, "n/a");
        }else{
            $color=$input[2];
            $car=new Car($model,$carEngineModel,"n/a",$color);
        }
    }

$carsArr[]=$car;
}

foreach ($carsArr as $car){
    echo $car;
}
