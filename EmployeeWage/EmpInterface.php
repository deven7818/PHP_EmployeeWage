<?php
/**
 * Interface to declare the functions to be implemented inside the EmployeeWage class
 */
interface CalculateEmpWage{
    public function attendance();
    public function dailyWage();
    public function monthlyWage();
}