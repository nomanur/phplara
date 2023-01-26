<?php 

	 // function connectToDb(){
		// try{
		// 	return new PDO('mysql:host=127.0.0.1;dbname=phplara','root','123');

		// }catch(Exception $e){
		// 	die('coudnt connect');
		// }
	 // }


	// function fetchAllResult($pdo){
	// 	$statement = $pdo->prepare('select * from todos');

	// 	$statement->execute();

	// 	//$results = ($statement->fetchAll(PDO::FETCH_OBJ));
	// 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
	// }