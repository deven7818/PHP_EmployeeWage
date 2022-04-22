<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-4
 * Employee wage Computation Program using switch case
 * Solving using Switch Case Statement
 */
class EmployeeWage
{
    public $WAGE_PER_HR = 20;
    public $FULL_TIME_WORKING_HRS = 8;
    public $PART_TIME_WORKING_HRS = 4;
    public $IS_FULL_TIME = 2;
    public $IS_PART_TIME = 1;
    public $IS_ABSENT = 0;

    /**
     * Function to Check Employee is Present, part-time or Absent
     * Returns working hrs
     */
    function attendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {
           
            case 1:
                echo "Full Time Employee\n";
                return $this->FULL_TIME_WORKING_HRS;
                break;
            
            case 2:
                echo "Part Time Employee\n";
                return $this->PART_TIME_WORKING_HRS;
                break;
    
            default:
                echo "Employee is Absent\n";
                return 0;
                break;
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