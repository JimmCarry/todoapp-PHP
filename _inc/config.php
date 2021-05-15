<?php

// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// require stuff
require_once 'vendor/autoload.php';


// global variables
$base_url = 'http://localhost/Dashboard/Programovani/todoapp';


// connect to db
use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'todo',
	'server'        => 'localhost',
	'username'      => 'root',
	'password'      => '',
	'charset'       => 'utf8'
]);


// global functions
require_once 'functions.php';