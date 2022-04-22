<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-2
 * Employee wage Computation Program
 * Calculating daily employee wage
 */
class EmployeeWage
{
    public $WAGE_PER_HR = 20;
    public $FULL_TIME_WORKING_HRS = 8;

    /**
     * function to check employee is present or not
     * using rand() function to generate random number 0 or 1 for Attendance
     */
    function attendance()
    {
        $empCheck = rand(0, 1);
        if ($empCheck == 1) {
            echo "Employee is Present\n";
            return $this->FULL_TIME_WORKING_HRS;
        } else {
            echo "Employee is Absent\n";
            return 0;
        }
    }
    /**
     * Function to Calculate Daily Wage
     * calculating the daily wage according to working hours
     */
    function dailyWage()
    {
        $totalHrs = $this->attendance();
        $dailyWage = $this->WAGE_PER_HR * $totalHrs;
        echo "Daily Wage : " . $dailyWage;
    }
}
//Creating object
$empWage = new EmployeeWage();
$empWage->dailyWage();
?>