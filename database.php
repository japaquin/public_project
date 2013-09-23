<?php
/*
	THIS IS THE BASE CLASS FOR THE MYSQL DATABASE CONNECTION
*/
require_once("config_db.php");  // The constants used by this class are in the config file

class database_my_sql
{
	/*  PUBLIC VARIABLES BEGIN  */
	/*  PUBLIC VARIABLES END  */
	
	
	/*  PRIVATE VARIABLES BEGIN  */
	private $connection;
	/*  PRIVATE VARIABLES END  */
	
	/*
		NAME: construct
		DESCRIPTION:  construtor function that initializes the database connection in the class
		INPUT: server location, user name, password
		OUTPUT:  none
	*/
	function __construct()
	{
		$connection = $database->open_connection();
	}
	
	/*
		NAME: connection_open
		DESCRIPTION:  opens the connection to the database and sets/opens the class $connection
		INPUT: none
		OUTPUT:  none
	*/
	public function connection_open()
	{
		$this->connection = mysql_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS);
		
		if(!$this->connection)
			die("MySQL connection error - " . mysql_error());  //  die if there is a failure to connect
			
		$select = mysql_select_db(MYSQL_NAME_OF_DB, $this->connection);
		if(!$select)
			die("MySQL selection error - " . mysql_error());
	}
	
	/*
		NAME: connection_close
		DESCRIPTION:  close the database connection and perform any clean up.
		INPUT: none
		OUTPUT:  void
	*/
	public function connection_close()
	{
		if(isset($this->connection))
		{
			mysql_close($this->connection);  // close the connection
			unset($this->connection);  //  destroy the connection variable
		}
	}
}

?>