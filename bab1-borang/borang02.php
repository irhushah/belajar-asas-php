<?php

echo '$_POST:<pre>';
print_r($_POST);
echo'</pre>';

include 'DB_Pdo.php';
include 'tatarajah.php';
$db_Pdo = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
# panggil sql
$sql='select * from belajar';
$result=$db_Pdo->selectAll($sql);

echo '$result:<pre>';
print_r($result);
echo'</pre>'; 