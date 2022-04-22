<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-7
 * Employee wage Computation Program
 * Refactored the Code to write a Class Method to Compute Employee Wage
 * Calculating Wages till a condition of total working hours or days is reached for a month
 */
class EmployeeWage
{
    public $WAGE_PER_HR = 20;
    public $FULL_TIME_WORKING_HRS = 8;
    public $PART_TIME_WORKING_HRS = 4;

    public $IS_FULL_TIME = 1;
    public $IS_PART_TIME = 2;
    public $IS_ABSENT = 0;

    public $WORKING_DAYS_PER_MONTH = 20;
    public $WORKING_HOURS_PER_MONTH = 100;

    public $workingHrs = 0;
    public $monthlyWage = 0;
    public $totalWorkingDays = 0;
    public $totalWorkingHours = 0;

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
     * returns daily wage of the employee
     */
    function dailyWage()
    {
        $totalHrs = $this->attendance();
        $this->workingHrs = $totalHrs;
        $dailyWage = $this->WAGE_PER_HR * $totalHrs;
        echo "Working Hours : " . $totalHrs. "\n";
        echo "Daily Wage : " . $dailyWage. "\n\n";
        return $dailyWage;
    }

   /**
     * Function to Calculate Monthly Wage
     * calculating monthly wage according to working hours
     * calling dailyWage() function to get daily wage
     */
    function monthlyWage()
    {
        while (
            $this->totalWorkingHours <= $this->WORKING_HOURS_PER_MONTH &&
            $this->totalWorkingDays < $this->WORKING_DAYS_PER_MONTH
        ) {
            $this->totalWorkingDays++;
            echo "Day : " . $this->totalWorkingDays. "\n";
            $dailyWage = $this->dailyWage();
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHrs;
        }

        echo "Total Working Days : " . $this->totalWorkingDays. "\n";
        echo "Total Working Hours : " . $this->totalWorkingHours. "\n";
        echo "Total Monthly Wage : " . $this->monthlyWage. "\n\n";
    }
}
//Creating object
$empWage = new EmployeeWage();
$empWage->monthlyWage();