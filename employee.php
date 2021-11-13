<?php

class Employess{
    var $name;
    var $title;
    var $salary;
    var $setEmployeeName;
    var $getEmployeeTitle;
    var $getEmployeeProfile;
    var $getEmployeeSalaryDays;


    function set_name($new_name) { 
        $this->name = $new_name;  
     }

       function get_name() {
        return $this->name;
    }

    function set_title_name($new_title){
        $this->title = $new_title;
    }

    function get_title() {
        return $this->title;
    }

    function set_salary($new_salary){
        $this->salary = $new_salary;
    }

    function get_salary() {
        return $this->salary;
    }
}

$Employees1 = new Employess();
$Employees1->name= "Fadli";
$Employees1->get_name();
$Employees1->title= "QA";
$Employees1->get_title();
$Employees1->salary= "50000000";
$Employees1->get_salary();

       
?>