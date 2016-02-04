<?php
namespace myproject\contract;

interface DatabaseConnection {

	public function connect ( $host, $username, $password=null );

}  // End interface