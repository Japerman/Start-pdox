<?php 

return  [
    'driver'	=> 'mysql',
    'host'		=> 'localhost',
	'database'	=> 'test',
	'username'	=> 'root',
	'password'	=> '',
	'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
	'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ],
];
