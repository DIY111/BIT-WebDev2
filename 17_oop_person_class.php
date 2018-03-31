<?php

class Person {
    // Class properties and methods
    public $name;
    public $sex = "m"; // defualt value
    public $dob;
    private $bank_account_no;
    protected $account_type;

    function showDetails(){
        //echo "My name is " . $this->name;
        echo "Account No " . $this->bank_account_no;
    }

    function setAccountNo($acc_no){
        $this->bank_account_no = $acc_no;
    }
}


$ilham = new Person(); 

$ilham->setAccountNo("80180928908098");

$ilham->showDetails();

?>