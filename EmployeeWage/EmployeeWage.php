<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-3
 * Employee wage Computation Program
 * Added Part time Employee & Wage
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
     * Function to Check Employee is Present , Part-time or Absent
     * Returns working hrs
     */
    function attendance()
    {
        $empCheck = rand(0, 2);
         if ($empCheck == $this->IS_FULL_TIME) {
            echo "Full Time Employee\n";
            return $this->FULL_TIME_WORKING_HRS;
        }else if ($empCheck == $this->IS_PART_TIME) {
            echo "Part Time Employee\n";
            return $this->PART_TIME_WORKING_HRS;
        } else {
            echo "Employee is Absent\n";
            return $this->IS_ABSENT;
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