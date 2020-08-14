<?php 
	
require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);
$query = $db->table('pages')->where('year', 2014)->where('status', 0)->delete();

if($query)
{
	echo 'Record(s) deleted!';
}