<?php

/*echo '$_POST:<pre>';
print_r($_POST);
echo'</pre>';*/

include 'DB_Pdo.php';
include 'tatarajah.php';
$db_Pdo = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

#istihar pembolehubah
$username=$_POST['login']['name'];
$password=$_POST['login']['password'];
# panggil sql

$sql='select * from belajar ' . "\r"
     . 'where username like "' . $username . '" '
	 . 'and password like "'. $password.'" ';	  
echo '$sql:<pre>';
print_r($sql);
echo'</pre>'; 
	  
$result=$db_Pdo->selectAll($sql);

echo '$result:<pre>';
print_r($result);
echo'</pre>'; 