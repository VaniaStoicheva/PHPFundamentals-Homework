<?php
class Employee{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    public function __construct($name,$salary,$position,$department,$email="n/a",$age="-1")
    {
        $this->name=$name;
        $this->salary=$salary;
        $this->position=$position;
        $this->department=$department;
        $this->email=$email;
        $this->age=$age;
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
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age)
    {
        $this->age = $age;
    }

}
$numberLine=intval(trim(fgets(STDIN)));
$persons=array();
for ($i=0;$i<$numberLine;$i++) {
    $input = explode(" ", trim(fgets(STDIN)));

    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $department = $input[3];

    if (count($input) >5) {
        $email = $input[4];
        $age = $input[5];

    $person = new Employee($name, $salary, $position, $department, $email, $age);
    }elseif(count($input)>4) {
        if (is_numeric($input[4])) {
            $age = $input[4];


            $person = new Employee($name, $salary, $position, $department,'n/a', $age);
        }else{
            $email=$input[4];
            $person = new Employee($name, $salary, $position, $department,$email,'-1');
        }
    }else{
        $person = new Employee($name, $salary, $position, $department);
    }
    $persons[]=$person;
}
$departments=array();


foreach ($persons as $person){
    if(array_key_exists($person->getDepartment(),$departments)){
        $departments[$person->getDepartment()]++;
    }else{
        $departments[$person->getDepartment()]=1;
    }


}
$averageSalaries=array();

foreach ($departments as $department=>$count){
    $averageSalary=0;
    foreach ($persons as $person) {
        if ($person->getDepartment() == $department) {
            $averageSalary+=$person->getSalary();
        }
    }
    $averageSalary/=$count;
   $averageSalaries[$department]=$averageSalary;
}

$highestAverage=max($averageSalaries);
$highestAverageDepartment=array_search($highestAverage,$averageSalaries);

echo "Highest Average Salary: ".$highestAverageDepartment."\n";

function sortBySalary($a,$b){
    return $a->getSalary()<$b->getSalary();
}
usort($persons,"sortBySalary");
foreach ($persons as $person) {
    if($person->getDepartment()==$highestAverageDepartment){
        echo $person->getName()
            .' '.number_format($person->getSalary(),2)
            .' '.$person->getEmail()
            .' '.$person->getAge()
            ."\n";
    }
}