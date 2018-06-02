<?php
    include_once("Database.php");
    include_once("GeneralFunction.php");
	include_once("DiscoverShow.php");

class UserFollow extends  GeneralFunction {
    private $connection;
    public $recordsPerPage;
    private $tableName;
    private $char;
    public function __construct(){
        parent::__construct();
        global $database;
        $this->connection = $database->getConnection();
        $this->recordsPerPage = 6;
        $this->tableName = "user_show_follow";
    }
    
    public function checkFollow($show_id, $user_id){
        $sql = "SELECT * FROM $this->tableName WHERE user_id=$user_id AND show_id=$show_id AND deleted = 0";
        $result_set = $this->connection->query($sql);
        if($row = mysqli_fetch_assoc($result_set)){
            return true;
        }else{
            return false;
        }
    }
    
    public function follow($show_id, $user_id){
        $sql = "SELECT * FROM $this->tableName WHERE show_id=$show_id AND user_id=$user_id";
        $result_set = $this->connection->query($sql);
        $rowcount = 0;
        while($row = mysqli_fetch_assoc($result_set)){
            $rowcount++;
        }
        if($rowcount == 0){
            $query = "INSERT INTO $this->tableName (user_id, show_id, followed_at,deleted) VALUES (?, ?, ?, ?)";
            $current_date = date("Y-m-d h:i:sa");
            $deleted = 0;

            $preparedStatement = $this->connection->prepare($query);
            $preparedStatement->bind_param("iisi", $user_id, $show_id, $current_date, $deleted);
            if ($preparedStatement->execute()) {
                return $this->connection->insert_id;
            } else {
                die("error while inserting record in $this->tableName");
            }     
        }else{
            $query = "UPDATE $this->tableName SET deleted=0 WHERE show_id=$show_id AND user_id=$user_id AND deleted=1";
            //$result_set = $this->connection->query($query);  
            if ($this->connection->query($query)) {
                echo 'success';
            } else {
                die("error while updating follow in $this->tableName ".$this->connection->error);
            }                     
        }
    }
    
    public function unfollow($show_id, $user_id){
        $current_date = date("Y-m-d h:i:sa");
        $deleted = 1;
        $query = "UPDATE $this->tableName SET deleted=$deleted, deleted_at='$current_date' WHERE show_id=$show_id AND user_id=$user_id AND deleted=0";
        //$result_set = $this->connection->query($query);  
        if ($this->connection->query($query)) {
            echo 'success';
        } else {
            //echo $show_id, $user_id;
            die("error while updating unfollow in $this->tableName".$this->connection->error);
        }         
    }
}

?>

