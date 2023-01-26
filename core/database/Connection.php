<?php 


/**
 * 
 */
class Connection
{
	
	public static function make($config)
	{
		try{
			//return new PDO('mysql:host=127.0.0.1;dbname=phplara','root','123');

			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}


}