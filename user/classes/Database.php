<?php
	class Database{
		private $host;
		private $username;
		private $password;
		private $database;
		private $connection;
		
		/* use to create default constructer*/
		public function __construct(){
			$this->host = "localhost";
			$this->username = "animesh";
			$this->password = "@lset31198";
			$this->database = "tv_show_time";
			$this->connectDB();
		}
		
		/* NOTE : PHP DOESNT SUPPORTOVERLOADING !*/
		public function connectionString($host, $username, $password, $database){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		
		public function connectDB(){
			$this->connection = new mysqli($this->host, $this->username, $this->password);
			if(/*$this->connection->errno*/ mysqli_connect_error()){
				//if connection is not successful
				die("Connection failed :" . /*$this->connection->connect_error*/ mysqli_error() );
			}
			$db_selected = $this->connection->select_db($this->database);
			if(!$db_selected){
				//echo "Database not selected" ;
				// usually used in open source project so that client wont installing much stuff
				//when given to client tab eesa karege
				/* client wont be exporting all the db , our php code will handle it */
				// eesa pura db , table banayega and can insert dummy values also
				/*
					$query = "....";
					if((mysli_query($this->connection , $query))){
						echo "DB created";
					}
				*/
			}else{
				//echo "Database selected" ;
			}
			//return $this->connection;
		}
		
		public function query( $sql ){
			$result = $this->connection->query( $sql );
			if( !$result){
				die("query failed : " .$sql);
			}
			return $result;
		}
		
		public function escape_string($string){
			$escaped_string = $this->connection->real_escape_string($string);
			return $escaped_string;
		}
		
		public function getConnection(){
			return $this->connection;
		}
		
		function __desturct(){
			//this is destructor in php
		}
		
	}

	$database = new Database();
?>