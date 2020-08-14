<?php 
	
require 'vendor/autoload.php';

$config = require 'db.php';

$db = new \Start\Pdox($config);

$records = $db->table('authors')
        ->select('authors.name, articles.title, articles.slug')
		->join('articles', 'users.id', 'articles.user_id')
        ->where('users.status', 1)
		->where('articles.status', 1)
        ->orderBy('articles.created_at', 'desc')
        ->limit(10)
        ->getAll();

foreach($records as $record)
{
	echo $record->name . '<br />' . 
		 $record->title . '<br />' . 
		 $record->slug;
}