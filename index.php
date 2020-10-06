<?php
class Company
{
    public $nameCompant;

    



    protected function callCompanyName()
    {
        return "{$this->nameCompant}";
    }
}

class Department extends Company
{

    public $name;

    public function getCompanyName()
    {
        return $this->nameCompant;
    }

    public function setCompanyName($nameCompant)
    {
        $this->nameCompant = $nameCompant;
    }

    public function getDepartmentName()
    {
        return $this->name;
    }

    public function setDepartmentName($name)
    {
        $this->name = $name;
    }



    protected function callDepartmentName()
    {
        return "{$this->name}";
    }
}

class Employee extends Department
{
    public $name;
    public $title;
    public $salary = 100000;

    public function getEmployeeName()
    {
        return $this->name;
    }

    
    public function setEmployeeName($name)
    {
        $this->name = $name;
    }
    
    public function setEmployeetitle($title)
    {
        $this->title = $title;
    }

    public function getEmployeetitle()
    {
        return $this->title;
    }


    public function getEmployeeSalary()
    {
        return $this->salary;
    }

    public function setEmployeeSalary($day)
    {
        $this->salary = $day;
    }

    public function getEmployeeProfile(){
        return $this->name."-".$this->title."-".$this->salary;
    }
}

$department = new Department;
$employee = new Employee;


$department-> setCompanyName("Dot ");
$department-> setDepartmentName("Backend Dev ");


$employee-> setEmployeeName(" Faris Adlan A ");
$employee-> setEmployeetitle(" Junior Developer ");

echo $department-> getCompanyName();
echo $department-> getDepartmentName();
// echo$employee->getEmployeeName();
// echo$employee->getEmployeetitle();
// echo$employee->getEmployeeSalary();

echo$employee->getEmployeeProfile();

