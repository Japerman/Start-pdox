<?php 

require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);

$data = [
	'username' => 'new-user-name',
	'password' => md5('new-password'),
	'status' => 1
];

$query = $db->table('users')->where('id', 17)->update($data);

if($query)
{
	echo 'Record updated!';
}