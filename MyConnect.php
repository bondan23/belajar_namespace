<?php
namespace myproject\bondan;

require_once("contract/DatabaseConnection.php");

use myproject\contract\DatabaseConnection as DBCON;

class MyConnect implements DBCON {
	
	public function __construct(){
		echo "HELLO WORLD 2";
	}
	public function connect ( $host, $username, $password=null) {
		$data = array(
			"host"=>$host,
			"username"=>$username,
			"password"=>$password
		);
		
		print_r($data);
		// Connect here

	}  // End method

}  // End 