<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-5
 * Employee wage Computation Program using switch case
 * Calculating Wages for a Month
 */
class EmployeeWage
{
    public $WAGE_PER_HR = 20;
    public $FULL_TIME_WORKING_HRS = 8;
    public $PART_TIME_WORKING_HRS = 4;
    public $IS_FULL_TIME = 2;
    public $IS_PART_TIME = 1;
    public $IS_ABSENT = 0;
    public $WORKING_DAYS_PER_MONTH = 20;

    /**
     * Function to Check Employee is Present, part-time or Absent
     * Returns working hrs
     */
    function attendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {

            case $this->IS_FULL_TIME:
                echo "Full Time Employee\n";
                return $this->FULL_TIME_WORKING_HRS;
                break;

            case $this->IS_PART_TIME:
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
        $dailyWage = $this->WAGE_PER_HR * $totalHrs;
        echo "Total Working Hours : " . $totalHrs . "\n";
        echo "Daily Wage : " . $dailyWage . "\n\n";
        return $dailyWage;
    }

    /**
     * Function to Calculate Monthly Wage
     * calculating monthly wage according to working hours
     * calling dailyWage() function to get daily wage
     */
    function monthlyWage()
    {
        $monthlyWage = 0;
        for ($i = 1; $i <= $this->WORKING_DAYS_PER_MONTH; $i++) {
            echo "Day : " . $i . "\n";
            $dailyWage = $this->dailyWage();
            $monthlyWage += $dailyWage;
        }
        echo "Total Monthly Wage : " . $monthlyWage . "\n\n";
    }
}
//Creating object
$empWage = new EmployeeWage();
$empWage->monthlyWage();
?>