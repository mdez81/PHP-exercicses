<?php
require_once('./Person.php');
require_once('./Employee.php');
require_once('./TeamLeader.php');

/**
 * Description of TeamLeader
 *
 * @author feher
 */
class TeamLeader extends Person implements Iterator
{
    private array  $employees = [];
    private $pozition =0;
    
    
    
    public function addEmployee(Employee $employee){
        $this->employees[] = $employee;
    }
    
    public function removeEmployee(Employee $employee){
        //keresés
        //majd unset
    }
    
    

    //Iterator methods
    public function current(): mixed {
        return $this->employees[$this->pozition];
    }

    public function key(): mixed {
        return $this->pozition;
    }

    public function next(): void {
         ++$this->pozition;
    }

    public function rewind(): void {
         $this->pozition=0;
    }

    public function valid(): bool {
        return isset($this->employees[$this->pozition]);
    }
}

$teamleader = new TeamLeader();

        $employee_1 = new Employee();
        $employee_1->setFirstname("George");
        $employee_1->setLastname("Smith");
        
         $employee_2 = new Employee();
          $employee_2->setFirstname("John");
        $employee_2->setLastname("Doe");
         
         $teamleader->addEmployee($employee_1);
         $teamleader->addEmployee($employee_2);
         
         foreach ($teamleader as $employee) {
             print($employee->getFirstname() .' - '. $employee->getLastname(). "<br>");
             
         }



