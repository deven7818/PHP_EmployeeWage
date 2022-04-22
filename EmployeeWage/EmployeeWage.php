<?php
echo "Welcome to Employee Wage Computation Problem";
/**
 * UC-1
 * Program for Employee Attendence - Employee Present or not
 * Employee wage Computation Program
 */
class EmployeeWage
{
    /**
     * function to check employee is present or not
     * using rand() function to generate random number 0 or 1 for Attendance
     */
    function attendance()
    {
        $empCheck = rand(0, 1);
        if ($empCheck == 1) {
            echo "\nEmployee is present";
        } else {
            echo "\nEmployee is absent";
        }
    }
}
//creating object of class
$empWage = new EmployeeWage();
$empWage->attendance();
?>