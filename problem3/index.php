<?php
     class Employee {
        public string $name;
        private string $email;
        private  $salary;
            public function SetEmail($y)
            {
                $this->email=$y;
            }
            public function GetEmail()
            {
                return $this->email;
            }

            public function SetSalary($x)
            {
                $this->salary=$x;
            }
            public function GetSalary()
            {
                return $this->salary;
            }
            
            public function display()
            {
                echo "Name :". $this->name. PHP_EOL;
                echo "Email :".$this->GetEmail(). PHP_EOL;
                echo "Salary :".$this->GetSalary(). PHP_EOL;
            }
     }
     $employee=new Employee();
     $employee->name="samad";
     $employee->SetEmail("samad4509@gmail.com");
     $employee->SetSalary(15000);
     $employee->display();
?>