<?php 
	
require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);

$records = $db->table('users')
        ->select('name, surname, age')
        ->where('age', '>', 18)
        ->orderBy('id', 'desc')
        ->limit(20)
        ->getAll();

foreach($records as $record)
{
	echo $record->name . '<br />' . 
		 $record->surname . '<br />' . 
		 $record->age;
}