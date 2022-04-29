<?php

/**
 * Class to take input for multiple companies
 */
class CompanyList
{
    //Created function for multiple companies
    public function multipleCompanies()
    {
        //$name = array();
        $totalWage = array();
        $n = readline("Number of companies : ");
        for ($i = 0; $i < $n; $i++) {
            $name = readline("Enter Name of company : ");
            $wage = readline("Enter Employee wage per Hour : ");
            $days = readline("Enter maximum working days per month : ");
            $hours = readline("Enter maximum working hours per month : ");
            echo "Employee Wage Computation For $name \n";
            $employeeWage = new EmployeeWage($name, $wage, $days, $hours);
           // $totalWage[$i] = $employeeWage->monthlyWage();
            $employeeWage->monthlyWage();
            if($i == ($n -1)){
             $employeeWage->getTotalWage();   
            }

        }
        }
    }

?>