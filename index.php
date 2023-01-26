<?php

//require './functions.php';
$query = require './core/bootstrap.php';

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');


//var_dump($_SERVER['REQUEST_URI']);
//var_dump($uri);

require $router->direct($uri);
//require './Task.php';


	//$pdo = connectToDb();



//	$results = $query->selectAll('todosS');


	// $results = array_map(function($result){
	// 	$t = new Task;

	// 	$t->description = $result->description;
	// 	$t->complete = $result->complete;

	// 	return $t;

	// }, $results);

	//var_dump($results);

    //$results = fetchAllResult($pdo);

	

	//var_dump($results[0]->test());




//require './index.view.php';


// /**
//  * 
//  */
// class Task
// {
	
// 	public $test = 'bar';

// 	public function foo()
// 	{
// 		return $this->test;
// 	}
// }


// $obj = new Task(); 

// var_dump($obj);