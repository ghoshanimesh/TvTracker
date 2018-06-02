<?php
	include_once("Database.php");
	class GeneralFunction{
			private $connection;
        	public function __construct(){
				global $database;
				$this->connection = $database->getConnection();
			}
		public function getTotalRecordsCount($tableName){
            $sql = "SELECT count(*) AS total_count from $tableName WHERE deleted=0";
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching total count of students");
            }
        }
        
        public function getTotalRecordsCountWithCondition($tableName, $condition){
            $sql = "SELECT count(*) AS total_count from $tableName WHERE deleted=0 " . $condition;
            //echo $sql;
            $result_set = $this->connection->query($sql);
            if($row = mysqli_fetch_assoc($result_set)){
                return $row['total_count'];
            }else{
                die("Error while Fetching with condition total count of students");
            }
        }
		public function readAllRecords($tableName){
            $result_set = $this->connection->query("SELECT * FROM $tableName WHERE deleted = 0");
            return $result_set;
        }
		
		public function readAllRecordsWithCondition($tableName, $condition){
            $result_set = $this->connection->query("SELECT * FROM $tableName WHERE deleted = 0 " . $condition);
            return $result_set;
        }
		
		public function deleteRecord($tableName,$id){
            $current_date = date("Y-m-d h:i:sa");
            $deleted = 1;
            $deleted_by = 1;
            
            $query = "UPDATE $tableName SET deleted = $deleted, deleted_at = '$current_date', deleted_by = '$deleted_by' WHERE id = $id";
            $this->connection->query($query);         
        }
		
		public function getAllDetailsByID($tableName,$id){
            $sql = "SELECT * FROM $tableName WHERE id=$id";
            $result_set = $this->connection->query($sql);
            if($this->connection->error)
                echo $this->connection->error;
            return ($result_set);
        }

	}
?>