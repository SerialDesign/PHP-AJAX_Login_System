<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

//Singleton class = CONNECTION IS OBLY OPENED ONCE AND THEN ALWAYS RETURNING THE SAME ONE.
class DB {

	protected static $con;

	private function __construct() {

		try {

            ////restricted user: user is restricted to only SELECT, INSERT, UPDATE, DELETE and ALTER (no Drop etc.) = Additional security! :) 
			self::$con = new PDO( 'mysql:host=localhost;dbname=login_system;charset=utf8', 'restrictedUser', 'ENiIDLuABQSzBH6i!' ); //restrictedUser , ENiIDLuABQSzBH6i! //localhost: 'cywy', 'cywy!'
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//uncomment on production sites
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
            self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


		} catch (PDOException $e) {
			echo "Could not connect to database."; exit;
		}

	}


	public static function getConnection() {

        //If this instance was not been started, start it.
		if (!self::$con) {
			new DB();
		}

        //Return the writabel db connection
		return self::$con;
	}
}

?>