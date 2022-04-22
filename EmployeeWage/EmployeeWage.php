<?php
echo "Welcome to Employee Wage Computation Problem\n";

/**
 * UC-8
 * Employee wage Computation Program
 * Calculating Wages till a condition of total working hours or days is reached for a month
 * calculate Employee Wage for multiple companies
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
     * Passing WAGE_PER_HR as parameter
     * calculating the daily wage according to working hours
     * returns daily wage of the employee
     */
    function dailyWage($WAGE_PER_HR)
    {
        $this->workingHrs = $this->attendance();
        $dailyWage = $WAGE_PER_HR * $this->workingHrs;
        echo "Working Hours : " . $this->workingHrs . "\n";
        echo "Daily Wage : " . $dailyWage . "\n\n";
        return $dailyWage;
    }

    /**
     * Function to Calculate Monthly Wage
     * calculating monthly wage according to working hours
     * calling dailyWage() function to get daily wage
     */
    function monthlyWage($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR)
    {
        while (
            $this->totalWorkingHours < $this->WORKING_HOURS_PER_MONTH &&
            $this->totalWorkingDays < $this->WORKING_DAYS_PER_MONTH
        ) {
            $this->totalWorkingDays++;
            echo "Day : " . $this->totalWorkingDays . "\n";
            $dailyWage = $this->dailyWage($WAGE_PER_HR);
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHrs;
        }

        echo "Total Working Days : " . $this->totalWorkingDays . "\n";
        echo "Total Working Hours : " . $this->totalWorkingHours . "\n";
        echo "Total Monthly Wage : " . $this->monthlyWage . "\n\n";
    }

    /**
     * Function for Taking User Input for company
     */
    function userInput()
    {
        $companyName = readline("Enter Company Name : ");
        echo "Employee wage for $companyName \n";
        $WORKING_DAYS_PER_MONTH = readline("Enter max working days per month : ");
        $WORKING_HOURS_PER_MONTH = readline("Enter Max Working Hours Per Month : ");
        $WAGE_PER_HR = readline("Enter Employee Wage Per Hour : ");
        $this->monthlyWage($WORKING_DAYS_PER_MONTH, $WORKING_HOURS_PER_MONTH, $WAGE_PER_HR);
    }
}
//Creating object for multiple company
$company1 = new EmployeeWage();
$company1->userInput();
$company2 = new EmployeeWage();
$company2->userInput();
?>