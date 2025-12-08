<?php
class BankAccount{
	public $accountNumber,$balance;

	public function __construct($accountNumber,$balance) {
		if($balance<=0)
			die("Amount canot be less than 0");
		$this->accountNumber=$accountNumber;
		$this->balance=$balance;
	}
     function showData(){
		echo("In account ".$this->accountNumber. "Balance available is " .$this->balance);
	 }

}
$b1= new BankAccount($accountNumber="2323",$balance="3343");
// $b2= new BankAccount();
// $b2->showData();
$b1->showData();

?>