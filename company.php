<?php

class Companys{
    var $name; 

    var $DepartmentName;
    var $CompanyName;

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

        function setCompanyName($new_Company){
            $this->CompanyName = $new_Company;
        }

        function get_CompanyName() {
			return $this->CompanyName;
		}
}

$Company1 = new Companys();
$Company1->name= "Tester Indonesia";
$Company1->get_name();
$Company1->DepartmentName= "Develop";
$Company1->get_DepartmentName();
$Company1->CompanyName= "Tester.id";
$Company1->get_CompanyName();
?>