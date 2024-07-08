<?php
require_once('./Person.php');
require_once('./Employee.php');
require_once('./TeamLeader.php');

/**
 * Description of PayRoll
 *
 * @author feher
 */
class Payroll
{

    public function calcVacation(Person $person){
        $person->payroll();
    }
    
    public function calcTeamLeaderVacation(TeamLeader $teamLeader){
        $teamLeader->payroll();
    }
}

$payroll    = new Payroll();
$employee   = new Employee();
$payroll->calcVacation($employee);
