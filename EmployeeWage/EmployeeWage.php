<?php

//function to display Welcome message
function welcome()
{
    echo "Welcome to Employee Wage Computation Problem\n";
}

/**
 * UC-10
 * Employee wage Computation Program
 * Calculating Wages till a condition of total working hours or days is reached for a month
 * calculate Employee Wage for multiple companies 
 * Using Instance Variable instead of function parameters
 * Used array for company employee wage
 */
class EmployeeWage
{
    public $FULL_TIME_WORKING_HRS = 8;
    public $PART_TIME_WORKING_HRS = 4;
    public $IS_FULL_TIME = 1;
    public $IS_PART_TIME = 2;
    public $IS_ABSENT = 0;

    public $WAGE_PER_HR;
    public $WORKING_DAYS_PER_MONTH;
    public $WORKING_HOURS_PER_MONTH;

    public $workingHrs = 0;
    public $monthlyWage = 0;
    public $totalWorkingDays = 0;
    public $totalWorkingHours = 0;

    /**
     * Parameterized contructor Function
     * Parameters are - $wage- wage per hr, $days-working days per month, $hours-working hrs per month
     */
    public function __construct($wage, $days, $hours)
    {
        $this->WAGE_PER_HR = $wage;
        $this->WORKING_DAYS_PER_MONTH = $days;
        $this->WORKING_HOURS_PER_MONTH = $hours;
    }
    /**
     * Function to Check Employee is Present or Absent
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
        }
    }

    /**
     * Function to Calculate Daily Wage
     * Printing the daily wage to the output
     * Calling attendance function to check employee attendance
     * returns daily wage of the employee
     */
    function dailyWage()
    {
        $this->workingHrs = $this->attendance();
        $dailyWage = $this->WAGE_PER_HR * $this->workingHrs;
        echo "Working Hours : " . $this->workingHrs . "\n";
        echo "Daily Wage : " . $dailyWage . "\n\n";
        return $dailyWage;
    }
    /**
     * Function to Calculate Monthly Wage
     * Printing the Monthly wage to the output
     * Calling daily wage function to get daily wage
     */
    function monthlyWage()
    {
        while (
            $this->totalWorkingHours < $this->WORKING_HOURS_PER_MONTH &&
            $this->totalWorkingDays < $this->WORKING_DAYS_PER_MONTH
        ) {
            $this->totalWorkingDays++;
            echo "Day : " . $this->totalWorkingDays . "\n";
            $dailyWage = $this->dailyWage($this->WAGE_PER_HR);
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHrs;
        }

        echo "Total Working Days : " . $this->totalWorkingDays . "\n";
        echo "Total Working Hours : " . $this->totalWorkingHours . "\n";
        echo "Monthly Wage : " . $this->monthlyWage . "\n\n";
    }


    /**
     * Function for Taking User Input for company
     */
    function userInput()
    {
        $companyName = readline('Enter Name of Company : ');
        echo "Employee Wage Computation For $companyName \n";
        $this->monthlyWage();
    }
}

//calling welcome() function for display welcome message
welcome();

//Creating object of EmployeeWage class passing the arguments wagePerHrs, workingDaysPerMonth, workingHrsPerMonth
$company1 = new EmployeeWage(25, 20, 100);
$company2 = new EmployeeWage(25, 24, 80);
$empWageArray = array($company1, $company2, $company3);
foreach ($empWageArray as $company) {
    $company->userInput();
}
?>