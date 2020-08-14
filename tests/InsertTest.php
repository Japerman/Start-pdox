<?php 

require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);

$data = [
	'name' => 'John',
	'surname' => 'Doe',
	'age' => '33',
	'country' => 'Spain',
	'city' => 'Barcelona',
	'status' => 1
];

$query = $db->table('users')->insert($data);

if($query)
{
	echo 'Record added! <br />' . 
		 'InsertID: ' . $db->insertId();
}