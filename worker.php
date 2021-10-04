<?php
CLass worker
{
    public $name, $age, $salary;
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
        $this->checkAge($age);
    }
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
    public function getName()
    {
       return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    private function checkAge(int $age)
    {
        if( $this->age<1 || $this->age>100 )
        {
            echo "<h1>$this->name имеет некорректный возраст</h1>";
        }
    }
}
$Ivan = new Worker();
$Vasya = new Worker();

$Ivan->setName('Иван');
$Ivan->setAge(25);
$Ivan->setSalary(1000);
$Vasya->setName('Вася');
$Vasya->setAge(10666666666666666664);
$Vasya->setSalary(2000);
$sumsal = $Vasya->salary+$Ivan->salary;
$sumage = $Ivan->age+$Vasya->age;
echo"<h1>$sumsal сумма зарплат $Ivan->name и $Vasya->name </h1>";
echo"<h1>$sumage сумма возрастов $Ivan->name и $Vasya->name </h1>";


