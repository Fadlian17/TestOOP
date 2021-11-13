<?php

class Departments{
    var $name; 

    var $DepartmentName;

		function set_name($new_name) { 
			$this->name = $new_name;  
 		}
 
   		function get_name() {
			return $this->name;
		}

        function setDepartmentName($new_Department){
            $this->DepartmentName = $new_Department;
        }

        function get_DepartmentName() {
			return $this->DepartmentName;
		}
}

$Departments1 = new Departments();
$Departments1->name= "Tester Indonesia";
$Departments1->get_name();
$Departments1->DepartmentName= "Develop";
$Departments1->get_DepartmentName();
?>