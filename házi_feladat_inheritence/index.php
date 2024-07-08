
        <?php
        require('./inheritence/TeamLeaderContent.php');
        require('./inheritence/Employee.php');
        
        $teamleader = new TeamLeaderContent();
        $employee_1 = new Employee("John Smith");
         $employee_2 = new Employee("Don John");
         
         $teamleader->addEmployee($employee_1);
         $teamleader->addEmployee($employee_2);
         
         foreach ($teamleader as $employee) {
             print($employee->getName());
         }
    

        
        ?>
