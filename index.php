<?php
namespace myproject;

require_once "app/connection.php";
require_once "MyConnect.php";

use myproject\app as a;
use myproject\apps as b;

use myproject\bondan\MyConnect;

//$conn = new a\Connection();
echo "<br>";
$conn2 = new MyConnect();
echo "<br>";
$conn2->connect("A","B","C");
echo "<br>";
$conn3 = new b\Connection();


//TAMBAH COMMAND